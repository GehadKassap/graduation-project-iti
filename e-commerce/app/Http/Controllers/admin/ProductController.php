<?php

namespace App\Http\Controllers\admin;

use App
\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use DB;

// file pakage help find image in storage to delete it
use Illuminate\Support\Facades\File;

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
        $messages = DB::table('problems')->count();

        $products = Product::all();
        // foreach ($products as $product) {
        //     $product["image"] = 'product_images/' . $product["image"];
        // }
        return view('admin.products', ["products" => $products],compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $messages = DB::table('problems')->count();

        return view('admin.addnewproduct', compact('messages'));
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

        if (isset($request["Product_discount"]) && !empty($request["Product_discount"])) $discount = $request["Product_discount"];
        else $discount = 0;



        Product::create([
            "name" => $request["product_name"],
            "description" => $request["product_description"],
            "price" => $request["product_price"],
            "discount" => $discount,
            "colors" => $request["product_color"],
            "sizes" => $request["product_size"],
            "category" => $request["product_category"],
            "sub_category" => $request["sub_category"],
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

        if ($request->file('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('product_images/', $filename);
            $image_path = "product_images/$product[image]";  // Value is not URL but directory file path
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
        } else {
            $filename = $product['image'];
        }


        if (isset($request["Product_discount"]) && !empty($request["Product_discount"])) $discount = $request["Product_discount"];
        else $discount = 0;

        $product->update([
            "name" => $request["product_name"],
            "description" => $request["product_description"],
            "price" => $request["product_price"],
            "discount" => $discount,
            "colors" => $request["product_color"],
            "sizes" => $request["product_size"],
            "category" => $request["product_category"],
            "sub_category" => $request["sub_category"],
            "quantity" => $request["Product_quantity"],
            "image" => $filename
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
        $image_path = "product_images/$product[image]";  // Value is not URL but directory file path
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        $product->delete();
        return redirect(route('products.index'));
    }
}