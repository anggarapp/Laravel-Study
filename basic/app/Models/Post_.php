<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Dear Kafka",
            "slug"  => "dear-kafka",
            "author" => "Takatsuki Sen",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero in, ad modi repellat alias nam asperiores nisi, rem temporibus cum blanditiis iusto, aspernatur cumque distinctio doloremque. Cum, laboriosam? Non, voluptatibus."
        ],
        [
            "title" => "Bileygr",
            "slug"  => "bileygr",
            "author" => "Eto Yoshimura",
            "body" => "Sam ipsum dolor sit amet consectetur adipisicing elit. Libero in, ad modi repellat alias nam asperiores nisi, rem temporibus cum blanditiis iusto, aspernatur cumque distinctio doloremque. Cum, laboriosam? Non, voluptatibus."
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
