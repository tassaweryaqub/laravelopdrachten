<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category; 
use  App\Models\Price; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
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

        return view('admin.products.show', compact('product')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //TODO  dropdown voor edit producten waar je ALLE categorieen meestuurt 
        $categories = Category::all(); 
        return view('admin.products.edit', compact('product', 'categories')); 

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductUpdateRequest $request, Product $product)
    {
        // TODO de update zorgt ervoor dat er een nieuwe prijs in wordt gezet (dus niet de oude waarde)

        $product ->name =  $request->name; 
        $product->description = $request->description; 
        $product->category_id  = $request->category_id; 
        $product->save(); 

        if($product->latest_price->price != $request->price) 

        $price = new Price(); 
        $price->price = $request->price; 
        $price->effdate = Carbon::now(); 
        $price->product_id = $product->id; 
        $price->save(); 

        return redirect()->route('products.index')->with('status', 'Product succesvol Geupdate!'); 

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
