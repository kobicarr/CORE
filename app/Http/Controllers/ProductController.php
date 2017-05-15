<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function newest()
    {
        $newestProducts = Product::orderBy('id', 'desc')->take(3)->get();
        return view('products.newest', ['newestProducts' => $newestProducts]);
    }

    public function showProduct($proSlug)
    {
        $product = Product::where('slug', $proSlug)->first();
        return view('products.product', ['product' => $product]);
    }
}
