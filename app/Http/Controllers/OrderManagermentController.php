<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderManagermentController extends Controller
{
    public function index()
    {
        $orders = Order::select('id', 'user_id', 'status', 'created_at')->orderby('id', 'desc')->paginate(10);
        foreach ($orders as $x) {
            $x->user;
        }
        return view('admin.order.list', [
            'orders'=>$orders
        ]);
    }


    public function edit(Order $order)
    {
        $order->user;
        $order->products;
        $order->totalPrice = 0;

        foreach ($order->products as $x) {
            $x->name = Product::find($x->id)->name;
            $order->totalPrice += $x->quantity * $x->price;
        }

        return view('admin.order.form', [
            'order' => $order
        ]);
    }

    // public function update(OrderUpdateRequest $request, Category $order)
    // {
    //     $order->fill($request->all());
    //     $order->save();
        
    //     return back()->with('success', 'Categoty updated successfully.');
    // }
}
