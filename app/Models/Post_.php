<?php

namespace App\Models;

class Post
{
    private static $blog_posts =
    [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fabian Alwan Zaidan",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam facere dignissimos sapiente qui facilis repellat sint accusamus libero numquam nemo!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ujang",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam facere dignissimos sapiente qui facilis repellat sint accusamus libero numquam nemo!"
        ]
            
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}

