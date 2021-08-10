<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function detail(User $author)
    {
        return view('posts', [
            'title' => "Posts by $author->name",
            'active' => 'authors',
            'posts' => $author->posts->load('category', 'author'),  // $author->posts - 'posts' is a method in User Model which is called just like an attribute, to show all post by user
        ]);
    }
}
