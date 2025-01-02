<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddToCartRequest;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function getCart() {
        if (!Auth::check()) {
            return redirect()->route('auth.login');
        }
        $cart= Auth::user()->cart()->firstOrCreate();

        $totalAmount = 0;
        foreach ($cart->products as $product) {
            $totalAmount += $product->price * $product->pivot->quantity;
        }

        return view('panier')->with(['cart' => $cart, 'totalAmount' => $totalAmount]);
    }

    public function addToCart(Request $request) {
        if (!Auth::check()) {
            return redirect()->route('auth.login');
        }
        $cart = Auth::user()->cart()->firstOrCreate();

        $existingProduct = $cart->products()->where('product_id', $request->productId)->first();

        if ($existingProduct) {
            // If the product already exists, increment its quantity
            $cart->products()->updateExistingPivot($request->productId, [
                'quantity' => $existingProduct->pivot->quantity + ($request->quantity ?? 1),
            ]);
        } else {
            // If the product doesn't exist, add it to the cart
            $cart->products()->attach($request->productId, [
                'quantity' => $request->quantity ?? 1,
            ]);
        }

        return view('products.index')->with(['message' => "Produit ajouté au panier", 'products' => Product::all()]);
    }

    public function removeFromCart(AddToCartRequest $request)
    {
        if (!Auth::check()) {
            return redirect()->route('auth.login');
        }
        $cart = Auth::user()->cart;
        $cart->products()->detach($request->productId);
        return redirect()->route('panier');
    }
}
