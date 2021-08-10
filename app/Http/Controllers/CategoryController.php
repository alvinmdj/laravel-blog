<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show()
    {
        return view('categories', [
            'title' => 'Categories',
            'active' => 'categories',
            'categories' => Category::all(),
        ]);
    }

    public function detail(Category $category)
    {
        return view('posts', [
            'title' => "Post by Category - $category->name",
            'active' => 'categories',
            'posts' => $category->posts->load('category', 'author'),    // $category->posts - 'posts' is a method in Category Model which is called just like an attribute, to show all post by category
        ]);
    }
}
