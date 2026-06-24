<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();

        return view('backend.parts.index', compact('products'));
    }

    public function create()
    {
        return view('backend.parts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'status' => 'required',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $imageName = time().'.'.$file->getClientOriginalExtension();

            $file->move(public_path('uploads/products'), $imageName);
        }

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'status' => $request->status,
            'image' => $imageName,
        ]);

        return redirect()->route('product.index')
            ->with('success', 'Product Added Successfully');
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