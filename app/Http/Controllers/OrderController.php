<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function getOrders() {
        if (Auth::user()->role === "admin") {

        }
        return Order::with('products')->get();
    }


    public function newOrder(Request $request)
    {
        $cart = Auth::user()->cart;

        $order = Auth::user()->orders()->firstOrCreate();

        foreach ($cart->products as $product) {
            $order->products()->attach($product->id, ['quantity' => $product->pivot->quantity]);
        }

        return "sucessful order !";
    }
}
