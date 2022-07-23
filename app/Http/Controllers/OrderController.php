<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('client.cart');
    }

    public function checkout()
    {
        return view('client.checkout');
    }
}
