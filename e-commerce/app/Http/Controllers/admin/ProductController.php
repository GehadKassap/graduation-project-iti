<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();
        $products["image"] = 'product_images/' . $products["image"];

        return view('admin.products', ["products" => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.addnewproduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $request->file->store('product', 'public');


        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('product_images/', $filename);

        Product::create([
            "name" => $request["product_name"],
            "description" => $request["product_description"],
            "price" => $request["product_price"],
            // "discount" => $request["Product_discount"],
            "colors" => $request["product_color"],
            "sizes" => $request["product_size"],
            "category" => $request["product_category"],
            "quantity" => $request["Product_quantity"],
            "image" => $filename
        ]);

        return redirect(route('products.index'));
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
        return view("admin.editproduct", ["product" => $product]);
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

        // $request->validate([
        //     "name" => "required",
        //     "price" => "required|numeric",
        //     "quantity" => "required|numeric",
        //     "describtion" => "required",

        // ]);
        if (isset($request["Product_discount"]))  $discount = $request["Product_discount"];
        else $discount = 0;

        $product->update([
            "name" => $request["product_name"],
            "description" => $request["product_description"],
            "price" => $request["product_price"],
            "discount" => $discount,
            "colors" => $request["product_color"],
            "sizes" => $request["product_size"],
            "category" => $request["product_category"],
            "quantity" => $request["Product_quantity"],
            // "image_path "=

        ]);
        return redirect(route('products.index'));
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
        $product->delete();
        return redirect(route('products.index'));
    }
}