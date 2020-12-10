<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Inertia\Inertia::render($request, 'Orders', [
            'orders' => Order::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'product_id'=>'required',
            'user_id'=>'required',
            'total_price'=>'required'
        ]);

        $order = new Order();
        $order->product_id = $request->product_id;
        $order->user_id = $request->user_id;
        $order->total_price = $request->total_price;

        $order->save();

        return response('successfully Created Order', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        return Inertia\Inertia::render('Orders', [
            'order' => Order::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'product_id'=>'required',
            'user_id'=>'required',
            'total_price'=>'required'
        ]);

        $order = Order::find($id);
        $order->product_id = $request->product_id;
        $order->user_id = $request->user_id;
        $order->total_price = $request->total_price;

        $order->save();

        return response('successfully Created your Order', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::find($id)->delete();
        return response('successfully Deleted your Order', 200);
    }
}
