<?php
namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "satu",
            "slug"  => "one"
        ],
        [
            "title" => "dua",
            "slug"  => "two"
        ]
    ];
    
    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere("slug", $slug);
    }
}
