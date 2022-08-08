<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::select('id', 'name', 'price', 'old_price', 'feature_image')->orderby('id', 'desc')->paginate(16);
        return view('client.productList', [
            'products' => $products
        ]);
    }

    public function detail(Product $product)
    {
        $product->category;
        return view('client.productDetail', [
            'product' => $product,
        ]);
    }
}
