<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
    }

    public function productInfo(Product $product)
    {
        return view('client.productDetail', [
            'product' => $product,
        ]);
    }
}
