<?php

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
        'title' => 'Home'
    ]);
})->name('home');

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Alvin Martin',
        'email' => 'alvin.martin@admin.com',
        'image' => 'ac2.jpg'
    ]);
})->name('about');

Route::get('/posts', [PostController::class, 'show'])->name('posts');

Route::get('/posts/{slug}', [PostController::class, 'detail']);