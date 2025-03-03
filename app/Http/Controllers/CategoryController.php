<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function show()
    {
        $categories = Category::latest()->get();
        return view('categories.index', ['title' => 'Categories', 'categories' => $categories]);
    }

    public function create()
    {
        return view('categories.create', ['title' => 'Create Category']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:categories',
            'color' => 'required|string'
        ]);

        $slug = Str::slug($request->name);

        Category::create([
            'name' => $request->name,
            'slug' => $slug,
            'color' => $request->color,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category added successfully');
    }
}
