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
        $featureProduct = Product::select('id', 'name', 'price', 'old_price', 'feature_image')->paginate(8);
        $newProducts = Product::select('id', 'name', 'price', 'old_price', 'feature_image')->orderBy('id', 'desc')->paginate(12);
        return view('client.home', [
            'newProducts' => $newProducts,
            'featureProduct'=>$featureProduct,
            'slides' => $slides
        ]);
    }
}
