<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Card;
use Illuminate\support\facades\DB;
use Illuminate\Http\Request;
use Session;

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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    //search function
    function searchProduct(Request $req)
    {
         //return $req->input();
     $dataHolder = Product::where( 'name','like', '%'. $req->input('term').'%')->get() ;
     return view("user.products.search" , ['searchItems' => $dataHolder]) ;
    }
    function detailsProduct($id)
    {
      //$product = Product::where('id' , '=' , $id)->first();
      $i=3;
      $product = Product::findorfail($id)  ;
      $allProducts=product::where('id', ">=" , $id)->take(4)->get();
      $relatedproduct=product::where('category', "=" ,$i )->take(4)->get();
   //$allProducts=product::where('id', "<=" , $id)->count();
      return view('user.products.productdetails' , ['product'=>$product , 'products'=>$allProducts,'relatedproducts'=> $relatedproduct]);
       //   dd($product);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=product ::all();
        return view('user.products.fashion',['product'=>$data]);
    }
    public function showbooks()
    {
        $data=product ::all();

        return view('user.products.books',['product'=>$data]);
    }
    public function showfurniture()
    {
        $data=product ::all();

        return view('user.products.furniture',['product'=>$data]);
    }

    public function showcosmatics()
    {
        $data=product ::all();

        return view('user.products.cosmatics',['product'=>$data]);
    }
    public function showelectronies()
    {
        $data=product ::all();

        return view('user.products.electronics',['product'=>$data]);
    }

    public function showhomeproduct()
    {
        // $data=product ::all();
        $data = product::take(8)->get();
        return view('user.index',['product'=>$data]);
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


   function addtocart(request $req)
   {
       if($req->session()->has('user')){
           $card= new card;
           $card->user_id=$req->session()->get('user')['id'];
           $card->pro_id=$req->product_id;
           $card->quantity=$req->quantity;
           $card->save();
           return redirect ('/cartdetails');
       }
       else
       {
           return redirect('/login');
       }
   }

// static function cartItem(){
//     $userid=Session::get('user')['id'];
//     return Card::where('user_id',$userid)->count();
// }
function cartlist(){
    $userid=Session::get('user')['id'];
    $products=DB::table('cards')
    ->join('products','cards.pro_id','=','products.id')
    ->where('cards.user_id', $userid)
    ->select('products.*')
    ->get();
    return view('user.products.cartdetails',['products'=>$products]);
}

 function removecart($rowid){
    Card::destroy($rowid);
    return redirect('cartdetails');
}

}
