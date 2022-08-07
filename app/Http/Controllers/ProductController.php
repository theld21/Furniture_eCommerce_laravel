<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('client.productList');
    }

    public function detail(Product $product)
    {
        $product->category;
        return view('client.productDetail', [
            'product' => $product,
        ]);
    }
}
