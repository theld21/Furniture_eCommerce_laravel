<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('client.cart');
    }

    public function addProduct(Product $product)
    {
        die;
    }

    public function checkout()
    {
        return view('client.checkout');
    }
}
