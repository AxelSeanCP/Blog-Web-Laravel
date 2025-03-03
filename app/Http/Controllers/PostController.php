<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function show()
    {
        return view('posts.index', ['title' => 'Blog', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(9)->withQueryString()]);
    }

    public function detail(Post $post)
    {
        return view('posts.detail', ['title' => 'Single Post', 'post' => $post]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('posts.create', ['title' => 'Create Post', 'categories' => $categories]);
    }

    public function store(Request $request) 
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|string',
            'author_id' => 'required|string',
            'body' => 'required|string'
        ]);

        $slug = Str::slug($request->title);

        Post::create([
            'title' => $request->title,
            'slug' => $slug,
            'category_id' => $request->category_id,
            'author_id' => $request->author_id,
            'body' => $request->body,
        ]);

        return redirect()->route('posts.index')->with('success', 'Blog added successfully');
    }
}
