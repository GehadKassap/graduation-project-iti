<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use DB;
class ordersController extends Controller
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
        $price = DB::table('orders')->sum('total');
        $maxPrice = DB::table('orders')->max('total');
        $minPrice = DB::table('orders')->min('total');
         // $orders=Order::all();
         $orders = DB::table('orders')
         ->join('users', 'users.id', '=', 'orders.user_id')
         // ->join('productorders', 'productorders.order_id', '=', 'orders.id')
         ->select('orders.*', 'users.fullname')
         ->orderBy('id')
         ->get();

        return view('admin.orders',["orders"=>$orders],compact('messages','price','maxPrice','minPrice'));
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
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
        $order=DB::table('orders')
        ->join('users', 'users.id', '=', 'orders.user_id')
        // ->join('products',)
        ->select('orders.*','users.fullname','users.address')
        ->where('orders.id','=',$order->id)
        ->get();
        // dd($order);
        return view('admin.orderdetails',["order"=>$order]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
