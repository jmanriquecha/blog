<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('blog.home');
    }

    public function blog()
    {
        $posts = [];

        return view('blog.blog', ['posts' => $posts]);
    }

    public function post($slug)
    {
        $post = $slug;

        return view('blog.post', ['post' => $post]);
    }
}
