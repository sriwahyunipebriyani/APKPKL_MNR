<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = category::all();
        return view('Category', ['categories' => $categories]);
    }
    public function add()
    {
        return view('category-add');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:100',
        ]);

        $category = category::create($request->all());
        return redirect('Category')->with('status', 'Category added Successfully');

        // dd($request->all());
    }

    public function edit($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('category-edit', ['category' => $category]);
        // dd($request->all());
    }

    public function update(Request $request, $slug)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:100',
        ]);

        $category = Category::where('slug', $slug)->first();
        $category->slug = null;
        $category->update($request->all());
        return redirect('Category')->with('status', 'Category updated Successfully');
    }

    public function delete($slug)
    {
        // dd($slug);
        $category = Category::where('slug', $slug)->first();
        $category->delete();
        return redirect('Category')->with('status', 'Category Deleted Successfully');
    }
    public function deletedCategory()
    {
        $deletedCategory = Category::onlyTrashed()->get();

        return view('category-deleted', ['deletedCategory' => $deletedCategory]);
    }
    public function Restore($slug)
    {
        $category = Category::withTrashed()->where('slug', $slug)->first();
        $category->restore();
        return redirect('Category')->with('status', 'Category restored Successfully');
    }

}