<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show()
    {
        return view('posts', [
            'title' => 'All Post',
            'active' => 'all-post',
            'posts' => Post::latest()->get(),
        ]);
    }

    public function detail(Post $post)
    {
        return view('post', [
            'title' => 'Post',
            'active' => 'all-post',
            'post' => $post,
        ]);
    }
}
