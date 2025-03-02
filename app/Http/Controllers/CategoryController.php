<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

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
}
