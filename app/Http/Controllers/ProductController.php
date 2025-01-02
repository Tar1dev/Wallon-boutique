<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Request;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index')->with('products', $products);
    }

    public function create(Request $request)
    {
        $product = Product::create($request->all());
        return $product;
    }
}
