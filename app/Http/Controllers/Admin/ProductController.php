<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category; 
use  App\Models\Price; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use Carbon\Carbon;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // deze get methode kan je alleen  gebruiken als je een belongsTo relatie hebt LET OP niet bij HASMANY ! 
        $products = Product::with('category')->get(); 
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // in de create method van Product willen we de category data en model gebruiken

        $categories = Category::all(); 
        return view ('admin.products.create', compact('categories')); 

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request)
    {
        //
        $product = new Product(); 
        $product->name = $request->name; 
        $product->description = $request->description; 
        $product->category_id = $request->category_id; 
        $product->save(); 

        $price = new Price(); 
        $price->price = $request->price; 
        $price->effdate = Carbon::now(); 
        $price->product_id = $product->id; 
        $price ->save(); 

            return redirect()->route('products.index')->with('status', 'Product Toegevoegd'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
