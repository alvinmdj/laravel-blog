<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function detail(User $author)
    {
        return view('posts', [
            'title' => 'Posts by ' . $author->name,
            'posts' => $author->posts,
        ]);
    }
}
