<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::all();
        return view ('products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        Product::create($input);
        return redirect('products')->with('flash_message', 'Product Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $product = Product::find($id);
        return view('products.edit')->with('products', $product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $product = Product::find($id);
        $input = $request->all();
        $product->update($input);
        return redirect('products')->with('flash_message', 'Product Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Product::destroy($id);
        return redirect('products')->with('flash_message', 'Product deleted successfully!');
    }
}
