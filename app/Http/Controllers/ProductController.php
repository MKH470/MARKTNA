<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Subcategory;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        if (count($categories) > 0) {
            return view('admin.products.create', compact('categories'));
        } else {
            notify()->warning('You can not create product if  there is no category: First you must create a category');
            return view('admin.category.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'image' => 'required|mimes:png,jpeg',
            'price' => 'required|numeric',
            'description' => 'required|min:3',
            'additional_info' => 'required',
            'category' => 'required'

        ]);
        $image = $request->file('image')->store('public/product');
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'additional_info' => $request->additional_info,
            'image' => $image,
            'price' => $request->price,
            'category_id' => $request->category,
            'subcategory_id' => $request->subcategory
        ]);
        notify()->success('Product created successfully!!');
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'price' => 'required|numeric',
            'description' => 'required|min:3',
            'additional_info' => 'required',
            'category' => 'required'

        ]);
        $product = Product::find($id);

        $image = $product->image;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('public/product');
            \Storage::delete($product->image);
        }

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->additional_info = $request->additional_info;
        $product->image = $image;
        $product->category_id = $request->category;
        $product->subcategory_id = $request->subcategory;
        $product->save();
        notify()->success('Product updated successfully!!');
        return redirect()->route('product.show', [$product->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $filename = $product->image;
        $product->delete();
        \Storage::delete($filename);
        notify()->success('Product deleted successfully!!');
        return redirect()->route('product.index');
    }
    public function loadSubCategories(Request $request, $id)
    {
        $subcategories = Subcategory::where('category_id', $id)->pluck('name', 'id');
        return response()->json($subcategories);
    }
}
