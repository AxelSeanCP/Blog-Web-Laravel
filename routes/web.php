<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
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
        return view('home', ['title' => 'Home', 'user' => Auth::user()]);
    });
    Route::put('/users/{user:username}', [UserController::class, 'update'])->name('users.update');

    Route::get('/categories', [CategoryController::class, 'show'])->name('categories.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');

    Route::get('/posts', [PostController::class, 'show'])->name('posts.index');    
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::get('/posts/{post:slug}', [PostController::class, 'detail'])->name('posts.detail');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{post:slug}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{post:slug}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post:slug}', [PostController::class, 'destroy'])->name('posts.destroy');

    Route::get('/about', function () {
        return view('about', ['name' => 'Axel Sean Cahyono Putra', 'title' => 'About']);
    });
    
    Route::get('/contact', function () {
        return view('contact', ['title' => 'Contact']);
    });
});