<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fiki Aprian",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque fugiat culpa quo reprehenderit? Natus accusantium vero itaque architecto, debitis, sint facilis ipsum quo temporibus nulla rem blanditiis possimus quae nihil.",
        ],
        [
            "title" => "Judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Budi",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit.",
        ],

        [
            "title" => "Judul post ketiga",
            "slug" => "judul-post-ketiga",
            "author" => "Andi",
            "body" => "Kenapa perasaan ku aneh yah, kaya sepi gini",
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere("slug", $slug);
    }
}
