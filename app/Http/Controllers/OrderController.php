<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $date1 = $request->sdate;
        $date2 = $request->edate;

        if ($request->sdate && $request->edate) {
            $orders = Order::whereBetween('orderdate', [new Carbon($date1), new Carbon($date2)])->where('status',0)->get();
        }else{
            $orders = Order::all();
        }

        return view('backend.orders.index',compact('orders'));
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
        $cartArr=json_decode($request->shop_data);
       
       $total=0;
       foreach ($cartArr as $row) {
           $total+=($row->price * $row->qty);
       }
       $order=new Order;
       $order->voucherno=uniqid();
       $order->orderdate=date('Y-m-d');
       $order->user_id=6;
       
       $order->total=$total;
       $order->save();

       foreach ($cartArr as $row) {
           $order->storethings()->attach($row->id,['qty'=>$row->qty]);
       }
       return 'Successful!';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('backend.orders.order_detail',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
