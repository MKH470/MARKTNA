<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Slider;
use App\Subcategory;
use Illuminate\Http\Request;

class FrontPeoductsListController extends Controller
{
    public function index()
    {
        $products = Product::latest()->limit(9)->get();
        $randomActiveProducts = Product::inRandomOrder()->limit(3)->get();
        $randomActiveProductIds = [];
        foreach ($randomActiveProducts as $product) {
            array_push($randomActiveProductIds, $product);
        }
        $randomItemProducts = Product::whereNotIn('id', $randomActiveProductIds)->limit(3)->get();
        $sliders = Slider::get();


        return view('products', compact('products', 'randomActiveProducts', 'randomItemProducts', 'sliders'));
    }
    public function showAllProducts(Request $request)
    {
        if ($request->search) {
            $products = Product::where('name', 'like', '%' . $request->search . '%')->orwhere('description', 'like', '%' . $request->search . '%')->orwhere('additional_info', 'like', '%' . $request->search . '%')->orderBy('created_at', 'desc')->paginate(50);
            return view('all-products', compact('products'));
        }
        $products = Product::orderBy('created_at', 'desc')->paginate(50);
        return view('all-products', compact('products'));
    }
    public function show($id)
    {
        $product = Product::find($id);
        $getProductFromSameCategory = Product::where('category_id', $product->category_id)->where('id', '!=', $product->id)->limit(3)->get();
        return view('show', compact('product', 'getProductFromSameCategory'));
    }
    public function showCategoryWithProduct(Request $request, $name)
    {
        $category = Category::where('slug', $name)->first();


        if ($request->has('subcategory')) {
            $products = $this->filterBySubcategories($request);
            $check = [];
            $checkedId = Subcategory::whereIn('id', $request->subcategory)->get();
            foreach ($checkedId as $checked) {
                array_push($check, $checked->id);
            }
        } elseif ($request->min || $request->max) {
            $products = $this->filterByPrice($request);
            $check = [];
        } else {
            $products = Product::where('category_id', $category->id)->get();
            $check = [];
        }

        $subcategories = Subcategory::where('category_id', $category->id)->get();
        $slug = $name;
        return view('category', compact('products', 'subcategories', 'slug', 'check', 'category'));
    }
    public function filterBySubcategories(Request $request)
    {
        $subId = [];
        $subcategories = Subcategory::whereIn('id', $request->subcategory)->get();
        foreach ($subcategories as $sub) {
            array_push($subId, $sub->id);
        }
        $products = Product::whereIn('subcategory_id', $subId)->get();
        return $products;
    }

    public function filterByPrice(Request $request)
    {
        $categoryId = $request->categoryId;
        $product = Product::whereBetween('price', [$request->min, $request->max])->where('category_id', $categoryId)->get();
        return $product;
    }
}
