<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use App\Order;
use App\User;
use App\Mail\Sendmail;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
    public function addToCart(Product $product, Request $request)
    {
        //return $product;

        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = new Cart();
        }
        $cart->add($product);


        session()->put('cart', $cart);
        //notify()->success('Product added to cart!');
        return redirect()->back()->with(['success' => 'Product added to your cart!']);
    }

    public function showCart()
    {

        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = null;
        }

        return view('cart', compact('cart'));
    }
    public function updateCart(Request $request, Product $product)
    {


        $cart  = new Cart(session()->get('cart'));
        $cart->updateQty($product->id, $request->qty);
        session()->put('cart', $cart);

        //notify()->success(' Cart updated!');
        return redirect()->back()->with(['success' => 'Cart updated!!']);
    }
    public function removeCart(Product $product)
    {
        $cart = new Cart(session()->get('cart'));
        $cart->remove($product->id);
        if ($cart->totalQty <= 0) {
            session()->forget('cart');
        } else {
            session()->put('cart', $cart);
        }
        //notify()->success(' Cart updated!');
        return redirect()->back()->with(['success' => 'Cart deleted!!']);
    }
    public function checkout($amount)
    {
        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = null;
        }
        return view('checkout', compact('amount', 'cart'));
    }
    public function charge(Request $request)
    {
        $charge = Stripe::charges()->create([
            'currency' => 'USD',
            'source' => $request->stripeToken,
            'amount' => $request->amount,
            'description' => 'Test'
        ]);
        $chargeId = $charge['id'];
        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = null;
        }
        Mail::to(auth()->user()->email)->send(new Sendmail($cart));
        if ($chargeId) {
            auth()->user()->orders()->create([
                'cart' => serialize(session()->get('cart'))
            ]);
            session()->forget('cart');
            return redirect()->to('/')->with(['success' => 'Transaction completed']);
        } else {
            return redirect()->back();
        }
    }
    public function order()
    {
        $orders = Auth()->user()->orders()->orderBy('created_at', 'desc')->get();
        $carts = $orders->transform(function ($cart, $key) {
            return unserialize($cart->cart);
        });

        return view('order', compact('carts'));
    }
    public function userOrder()
    {
        $orders = Order::latest()->get();
        return view('admin.order.index', compact('orders'));
    }
    public function userOrderView($userid, $orderid)
    {
        $user = User::find($userid);
        $orders = $user->orders->where('id', $orderid);
        $carts = $orders->transform(function ($cart, $key) {
            return unserialize($cart->cart);
        });

        return view('admin.order.show', compact('carts'));
    }
}
