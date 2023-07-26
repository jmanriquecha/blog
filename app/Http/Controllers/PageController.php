<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    public function home(Request $request)
    {
        $search = $request->search;
        $posts = Post::where('title', 'LIKE', "%$search%")->latest()->paginate(10);

        return view('blog.home', ['posts' => $posts]);
    }

    public function post(Post $post)
    {
        return view('blog.post', ['post' => $post]);
    }
}
