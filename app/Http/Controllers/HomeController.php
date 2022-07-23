<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $slides = Slider::all();
        $chairs = Product::select('id', 'name', 'price', 'old_price', 'feature_image')->where('category_id', '=', '3')->paginate(10);
        $desks = Product::select('id', 'name', 'price', 'old_price', 'feature_image')->where('category_id', '=', '1')->paginate(10);
        return view('client.home', [
            'chairs' => $chairs,
            'desks' => $desks,
            'slides' => $slides
        ]);
    }
}
