<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    public function home()
    {
        return view('blog.home');
    }

    public function blog()
    {
        $posts = Post::paginate(10);

        return view('blog.blog', ['posts' => $posts]);
    }

    public function post(Post $post)
    {
        return view('blog.post', ['post' => $post]);
    }
}
