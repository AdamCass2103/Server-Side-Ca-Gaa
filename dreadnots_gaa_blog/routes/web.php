<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::resource('posts', PostController::class);
Route::resource('players', PlayerController::class);
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/blog', [BlogController::class, 'index']);
