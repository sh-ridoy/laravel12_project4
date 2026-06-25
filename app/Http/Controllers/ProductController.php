<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        $products = Product::all();

        return view('backend.parts.index', [
            'items' => $products
        ]);

        return view('backend.parts.index');

    }

    public function create()
    {
       $cats= Category::all();
        return view('backend.parts.create',['items'=>$cats]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'name'        => 'required|min:4|max:50',
            'price'       => 'required|numeric',
            'category'    => 'required',
            'status'      => 'required',
            'stock'       => 'required|numeric',
            'image'       => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'description' => 'nullable',
        ]);

        $product = new Product();


        $fileName = time() . rand(1000, 9999) . '.' . $request->file('image')->extension();
        $request->file('image')->move(public_path('images'), $fileName);


        $product->name = $request->name;
        $product->category = $request->category;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->stock = $request->stock;
        $product->image = 'images/' . $fileName;


        $product->save();

        return redirect()->back()
            ->with('success', 'Product created successfully!');
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }

}



