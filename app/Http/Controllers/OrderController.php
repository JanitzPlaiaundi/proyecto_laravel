<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;


class OrderController extends Controller
{
    function index(){
        $orders = Order::where("user_id", auth()->id())->get();
        return(view("orders.index", compact("orders")));
    }

     public function create()
    {
        return(view("orders.create"));
    }

    public function delete()
    {
        return(view("orders.delete"));
    }

    public function store(Request $request)
    {
        $order = new Order();
        $order->user_id = auth()->id();
        $order->user_address = $request->input("user_address");
        $order->price = $request->input("price");
        $order->save();

        return redirect()->route("orders.index");
    }

    public function destroy(Request $request)
    {
        $id = $request->input("orderId");
        $order = Order::findOrFail($id);
        if ($order->user_id !== auth()->id()) {
            abort(403);
        }
        $order->delete();

        return redirect()->route("orders.index");
    }
}
