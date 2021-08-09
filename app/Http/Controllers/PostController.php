<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show()
    {
        return view('posts', [
            'title' => 'Posts',
            'posts' => Post::all(),
        ]);
    }

    public function detail(Post $post)
    {
        return view('post', [
            'title' => 'Post',
            'post' => $post,
        ]);
    }
}
