<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductManagementController extends Controller
{
    public function index()
    {
        $products = Product::select('id', 'name', 'price', 'old_price', 'feature_image', 'status')->orderby('id', 'desc')->paginate(16);
        return view('admin.product.list', [
            'products'=>$products
        ]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.product.form',[
            'categories'=>$categories
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required|min:0',
            'old_price' => 'required|min:0',
            'feature_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'content' => '',
            'category_id' => 'required|integer',
            'status' => 'required|integer',
        ]);
        $validatedData['user_id'] = 1;
    

        if ($request->hasFile('feature_image')) {
            $feature_image = $request->feature_image;
            $imageName = $feature_image->hashName();
            $validatedData['feature_image'] = $feature_image->storeAs('images/products', $imageName);
            $validatedData['feature_image'] = 'images/products/'.$imageName;
        } else {
            unset($validatedData['feature_image']);
        }

        $product = Product::create($validatedData);
          
        return back()->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();

        return view('admin.product.form', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required|min:0',
            'old_price' => 'required|min:0',
            'feature_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'category_id' => 'required|integer',
            'status' => 'required|integer',
        ]);

        if ($request->hasFile('feature_image')) {
            $feature_image = $request->feature_image;
            $imageName = $feature_image->hashName();
            $validatedData['feature_image'] = $feature_image->storeAs('images/products', $imageName);
            $validatedData['feature_image'] = 'images/products/'.$imageName;
        } else {
            unset($validatedData['feature_image']);
        }

        Product::find($request->product)->update($validatedData);
        
        return back()->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        if (!$product) return back();
        $product->delete();

        return redirect()->route("admin.product.list");
    }

    public function changeStatus(Product $product)
    {
        if (!$product) return back();
        $product->update([
            'status' => $product->status == 0 ? 1 : 0
        ]);

        return redirect()->back();
    }

    public function search(Request $request)
    {
        $products = Product::select('id', 'name', 'price', 'thumbnail_url', 'status')->where('name', 'LIKE', "%{$request->search}%")->orderby('id', 'desc')->paginate(5);
        return view('admin.product.list', [
            'products'=>$products,
            'searchContent' => $request->search
        ]);
    }
}