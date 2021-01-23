<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Card;
use App\Models\Fav;
use App\Models\Review;
use App\Models\Order;



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
    }

    // function addToCart(Request $req)
    // {
    //     if($req->session()->has('user'))
    //     {
    //        $cart= new Card;
    //        $cart->user_id=$req->session()->get('user')['id'];
    //        $cart->pro_id=$req->pro_id;
    //        $cart->save();
    //        return redirect('/');

    //     }
    //     else
    //     {
    //         return redirect('/signin');
    //     }
    // }
    // function cartItem(){
    //     $userId=Session::get('user')['id'];
    //     return Card::where('user_id',$userId)->count();
    // }

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
        $dataHolder = Product::where('name', 'like', '%' . $req->input('term') . '%')->get();
        return view("user.products.search", ['searchItems' => $dataHolder]);
    }
    function detailsProduct($id)
    {
        //$product = Product::where('id' , '=' , $id)->first();
        $i = "Electronics";
        $product = Product::findorfail($id);
        $allProducts = product::where('category', "=", $i)->take(4)->get();
        $relatedproduct = product::where('category', "=", $i)->take(4)->get();
        //$allProducts=product::where('id', "<=" , $id)->count();
        return view('user.products.productdetails', ['product' => $product, 'products' => $allProducts, 'relatedproducts' => $relatedproduct]);
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
        $data = product::all();
        return view('user.products.fashion', ['product' => $data]);
    }
    public function showhome()
    {
        $allproducts = product::take(8)->get();
        $data = product::all();
        return view('user.products.homeCategories', ['product' => $data, 'allproducts' => $allproducts]);
    }
    public function showbooks()
    {
        $data = product::all();

        return view('user.products.books', ['product' => $data]);
    }
    public function showfurniture()
    {
        $data = Product::all();

        return view('user.products.furniture', ['product' => $data]);
    }

    public function showcosmatics()
    {
        $data = product::all();

        return view('user.products.cosmatics', ['product' => $data]);
    }
    public function showelectronies()
    {
        $data = product::all();

        return view('user.products.electronics', ['product' => $data]);
    }

    public function showhomeproduct()
    {
        // $data=product ::all();
        $data = product::take(8)->get();
        return view('user.index', ['product' => $data]);
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
        $i = 0;

        $cards = Card::all();
        foreach ($cards as $card) {
            if ($card->pro_id == $req->product_id) {
                $i++;
                break;
            }
        }
        if ($i == 1) {
            //  $carddd= new card; 
            //  $carddd->user_id=$req->session()->get('user')['id']; 
            //  $carddd->pro_id=$req->product_id;
            $card->quantity = $card->quantity + 1;
            $card->save();
            $i = 0;
            return back();
        } else {
            if ($req->session()->has('user')) {
                $card = new card;
                $card->user_id = $req->session()->get('user')['id'];
                $card->pro_id = $req->product_id;
                $card->quantity = 1;
                $card->save();
                //    return redirect ('/cartdetails');
                return back();
            } else {
                return redirect('/login');
            }
        }
    }

    // static function cartItem(){
    //     $userid=Session::get('user')['id'];
    //     return Card::where('user_id',$userid)->count();
    // }
    function cartlist()
    {
        $userid = Session::get('user')['id'];
        $products = DB::table('cards')
            ->join('products', 'cards.pro_id', '=', 'products.id')
            ->where('cards.user_id', $userid)
            ->select('products.*')
            ->get();
        $carddb = card::all();
        $i = 0;
        $card = [];
        foreach ($carddb as $item) {
            $card[$i] = array("id" => $item['id'], "cquantity" => $item['quantity'], "pro_id" => $item['pro_id']);
            $i++;
        }

        $total = DB::table('cards')
            ->join('products', 'cards.pro_id', '=', 'products.id')
            ->where('cards.user_id', $userid)
            ->sum('products.price');
        return view('user.products.cartdetails', ['products' => $products, 'total' => $total, 'card' => $card]);
    }

    function removecart($id)
    {

        $del = Card::destroy($id);
        return redirect('cartdetails');
        // DB::table('cards')->where('id',$id)->delete();
        //   return redirect('cartdetails');
    }

    //favorite function
    function addtofav(request $req)
    {
        $i = 0;
        $fav = new fav;
        $favs = Fav::all();
        foreach ($favs as $fav) {
            if ($fav->pro_id == $req->product_id) {
                $i++;
            }
        }
        if ($i == 1) {
            $fav->save();
            $i = 0;
            return back();
        } else {
            if ($req->session()->has('user')) {
                $fav = new fav;
                $fav->user_id = $req->session()->get('user')['id'];
                $fav->pro_id = $req->product_id;
                $fav->save();
                return back();
            } else {
                return redirect('/login');
            }
        }
    }


    function favlist()
    {
        $suggest= product::take(8)->get();
        $userid = Session::get('user')['id'];
        $products = DB::table('favs')
            ->join('products', 'favs.pro_id', '=', 'products.id')
            ->where('favs.user_id', $userid)
            ->select('products.*')
            ->get();
        $favddb = Fav::all();
        $i = 0;
        $fav = [];
        foreach ($favddb as $item) {
            $fav[$i] = array("id" => $item['id'], "pro_id" => $item['pro_id']);
            $i++;
        }
        return view('user.products.favorite', ['products' => $products, 'fav' => $fav, 'suggest' =>$suggest]);
    }

    function removefav($id)
    {
        $del = Fav::destroy($id);
        return redirect('favdetails');
    }
    public function removeall()
    {
        DB::table('favs')->delete();
        return redirect('favdetails');
    }
    public function updateCartProduct($id=null,$quantity=null){
        DB::table('cards')->where('id',$id)->increment('quantity',$quantity);
        return redirect('/cartdetails');
    }
    
    // show checkout page
     function showCheckout(request $req){ 
        $userid=Session::get('user')['id'];
        $orderr= new Order;
        $orderr->sub_total=$req['sub_total'];
        $orderr->total=$req['total'];
        $orderr->user_id=$userid;
        $orderr->quantity=$req['qty'];
        $orderr->save();
    
          
        $order=array("sub_total"=>$req['sub_total'], "total"=>$req['total'],"quantity"=>$req['qty']); 
        
        return view('user.products.checkout',['order'=>$order]);
     }
    }
