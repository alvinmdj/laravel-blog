<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{    
    /**
     * Show all post.
     *
     * @return void
     */
    public function show()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('posts', [
            'title' => "All Post $title",
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))
                                     ->paginate(7)
                                     ->withQueryString(),
        ]);
    }
    
    /**
     * Show each post details
     *
     * @param  mixed $post
     * @return void
     */
    public function detail(Post $post)
    {
        return view('post', [
            'title' => 'Post',
            'post' => $post,
        ]);
    }
}
