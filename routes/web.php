<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'active' => 'home',
    ]);
})->name('home');

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'active' => 'about',
        'name' => 'Alvin Martin',
        'email' => 'alvin.martin@admin.com',
        'image' => 'ac2.jpg'
    ]);
})->name('about');

Route::get('/posts', [PostController::class, 'show'])->name('posts');

Route::get('/posts/{post:slug}', [PostController::class, 'detail']);

Route::get('/categories', [CategoryController::class, 'show'])->name('categories');