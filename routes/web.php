<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view("home", ["title"=> "Home"]);
});

Route::get('/about', function () {
    return view("about", ["title"=> "About","name" => "Fiki Aprian", "email" => "fikiaprian23@gmail.com", "image" => "fiki.png"]);
});



Route::get('/blog', function () {
    $blog_post = [
    [
        "title" => "Judul post pertama",
        "slug"=> "judul-post-pertama",
        "author" => "Fiki Aprian",
        "body" =>  "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque fugiat culpa quo reprehenderit? Natus accusantium vero itaque architecto, debitis, sint facilis ipsum quo temporibus nulla rem blanditiis possimus quae nihil."
    ],
    [
        "title" => "Judul post kedua",
        "slug"=> "judul-post-kedua",
        "author" => "Budi",
        "body" =>  "Lorem ipsum dolor, sit amet consectetur adipisicing elit."
    ]
];
    return view("blog", ["title" => "Blog", "posts"=> $blog_post]);
});

// halaman single blog
Route::get('/blog/{slug}', function ($slug) {
     $blog_post = [
    [
        "title" => "Judul post pertama",
        "slug"=> "judul-post-pertama",
        "author" => "Fiki Aprian",
        "body" =>  "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque fugiat culpa quo reprehenderit? Natus accusantium vero itaque architecto, debitis, sint facilis ipsum quo temporibus nulla rem blanditiis possimus quae nihil."
    ],
    [
        "title" => "Judul post kedua",
        "slug"=> "judul-post-kedua",
        "author" => "Budi",
        "body" =>  "Lorem ipsum dolor, sit amet consectetur adipisicing elit."
    ]
];
    $new_post = [];
    foreach ($blog_post as $post){
        if ($post["slug"]===$slug){
            $new_post = $post;
        }
    }

    return view("post", ["title" => "Single Post", "post"=> $new_post]);
});

