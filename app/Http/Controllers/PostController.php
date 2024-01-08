<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view("blog", ["title" => "Blog", "posts" => Post::latest()->get()]);

    }

    public function show(Post $post)
    {
        return view("post", ["title" => "Single Post", "post" => $post]);
    }

}
