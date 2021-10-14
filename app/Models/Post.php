<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            'title'  => 'Judul Post Pertama',
            'slug'   => 'judul-post-pertama',
            'author' => 'Wijdan Muhammad Ridwanulloh',
            'body'   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere exercitationem quo et non id tempore neque ex enim harum laboriosam autem doloremque ratione voluptatem vero optio possimus nostrum quae molestias, quidem corrupti eligendi voluptatum pariatur. In temporibus facere dolorem eos tempora quod ratione soluta suscipit impedit facilis quibusdam ipsam, nihil omnis ducimus dicta. Doloribus vero vel quis perspiciatis eveniet molestiae facilis veniam sunt esse iure. Commodi incidunt corrupti debitis. Vel voluptatum laborum nobis provident tempore nesciunt tempora officiis. Eius, eum!"
        ],
        [
            'title'  => 'Judul Post Kedua',
            'slug'   => 'judul-post-pertama',
            'author' => 'Niki',
            'body'   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere exercitationem quo et non id tempore neque ex enim harum laboriosam autem doloremque ratione voluptatem vero optio possimus nostrum quae molestias, quidem corrupti eligendi voluptatum pariatur. In temporibus facere dolorem eos tempora quod ratione soluta suscipit impedit facilis quibusdam ipsam, nihil omnis ducimus dicta. Doloribus vero vel quis perspiciatis eveniet molestiae facilis veniam sunt esse iure. Commodi incidunt corrupti debitis. Vel voluptatum laborum nobis provident tempore nesciunt tempora officiis. Eius, eum!"
        ],
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
