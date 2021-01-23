<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use DB;

class orderdetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.orderdetails');
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
          // $order=DB::table('orders')
        // ->where('id','=',$order->id)
        // ->update([
        //     'state'=>'deliver',
        // ]);
        // $order->update([
        //     "deliver"=>$request["state"]

        // ]);
        // $order->status = 'deliver';
        // $order->update();
        // return redirect(route("orderdetails.index"));

        //
        //     $state=DB::table('orders')
    //     ->select('orders.state')
    //     ->where('orders.id','=',$order->id)
    //     ->get();
    //    dd($state);
    // if($order->state=='inprogress')
    // { 
        //     // dd($order);
        //     // // $state->state='deliver';
        //     // // // dd($state);
        //     return view('admin.orders');
        // }
        
    }
    
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Order $order)
    // {
    //     //
    //     $order->update([
    //         "state" => "deliver"
    //     ]);
    //     dd($request->id);
    //     // return redirect(route('orders.index'));
    // }
    public  function change(Request $request)
    {
         $order=DB::table('orders')
        ->where('id','=',$request->id)
        ->update([
            'state'=>'deliver',
         ]);
                // dd($request->id);
        return redirect(route('orders.index'));

    }
    public  function cancel(Request $request)
    {
         $order=DB::table('orders')
        ->where('id','=',$request->id)
        ->update([
            'state'=>'cancel',
         ]);
                // dd($request->id);
        return redirect(route('orders.index'));

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
