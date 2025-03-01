<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LogoutController::class, 'logout']);

Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home', ['title' => 'Home Page', 'user' => Auth::user()]);
    });
    
    Route::get('/about', function () {
        return view('about', ['name' => 'Axel Sean Cahyono Putra', 'title' => 'About']);
    });
    
    Route::get('/posts', function () {    
        return view('posts', ['title' => 'Blog', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(9)->withQueryString()]);
    });
    
    Route::get('/posts/{post:slug}', function (Post $post) {
        return view('post', ['title' => 'Single Post', 'post' => $post]);
    });
    
    // Route::get('/authors/{user:username}', function (User $user) {
    //     return view('posts', ['title' => count($user->posts) . ' Articles by ' . $user->name, 'posts' => $user->posts]);
    // });
    
    // Route::get('/categories/{category:slug}', function (Category $category) {
    //     return view('posts', ['title' => count($category->posts) . ' Articles in: ' . $category->name, 'posts' => $category->posts]);
    // });
    
    Route::get('/contact', function () {
        return view('contact', ['title' => 'Contact']);
    });
});