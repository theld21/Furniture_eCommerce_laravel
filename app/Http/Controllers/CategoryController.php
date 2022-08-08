<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::select('id', 'name')->orderby('id', 'desc')->paginate(10);
        return view('admin.category.list', [
            'categories'=>$categories
        ]);
    }

    public function create()
    {
        return view('admin.category.form');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required'
        ], [
            'name.required' => 'Name field is required.',
        ]);
        
        $validatedData['parent_id'] = 0;
        Category::create($validatedData);

        return back()->with('success', 'Category created successfully.');
    }

    public function edit(Category $category)
    {

        return view('admin.category.form', [
            'category' => $category
        ]);
    }

    public function update(CategoryUpdateRequest $request, Category $category)
    {
        $category->fill($request->all());
        $category->save();
        
        return back()->with('success', 'Categoty updated successfully.');
    }

    public function destroy(Category $category)
    {
        if (!$category) return back();
        $category->delete();

        return redirect()->route("admin.category.list");
    }
}
