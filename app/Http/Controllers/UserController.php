<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddToCartRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use function Termwind\render;

class UserController extends Controller
{
    public function all() {
        return User::all();
    }

    public function me()
    {
        if (Auth::check()) {
            if (Auth::user()->role === 'admin') {
                return redirect('/admin');
            }
            return view('profile');
        }
        return redirect()->route('home');
    }

    public function getCart() {
        if (Auth::check()) {
            $cart = Auth::user()->cart;
            return view('panier')->with('cart', $cart);
        }
        return redirect()->route('auth.login');
    }

    public function addToCart(AddToCartRequest $request) {
        $validated = $request->validated();

        $productId = $validated['productId'];
        $quantity = $validated['quantity'];

        $user = Auth::user();
        $cart = $user->cart ?? []; // Default to an empty array if cart is null

        // Convert cart JSON to an array if it's stored as JSONB
        if (!is_array($cart)) {
            $cart = json_decode($cart, true);
        }

        // Check if the product already exists in the cart
        $existingItemKey = array_search($productId, array_column($cart, 'productId'));

        if ($existingItemKey !== false) {
            // Update quantity if the product exists
            $cart[$existingItemKey]['quantity'] += $quantity;
        } else {
            // Add a new product to the cart
            $cart[] = ['productId' => $productId, 'quantity' => $quantity];
        }

        // Save the updated cart back to the database
        $user->cart = json_encode($cart);
        $user->save();

        return view('products.index')->with(['message' => "Produit ajouté au panier", 'products' => Product::all()]);
    }
}
