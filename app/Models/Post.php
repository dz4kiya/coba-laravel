<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "dzakiya",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. At tempore, amet illum consectetur, facilis vero ut veritatis in pariatur impedit accusantium praesentium dolorum quia quaerat perferendis! Aut dicta facilis rem rerum officia voluptate voluptates temporibus ipsum excepturi voluptatem. Veniam fugit quis vitae libero ex debitis dicta dolore, officia iusto quos inventore pariatur itaque fuga quidem? Totam ratione laborum harum, reprehenderit esse delectus porro dolores earum? Molestias, qui. Vitae officiis, quis pariatur exercitationem quas voluptate porro, tempore placeat reprehenderit deserunt neque?"
        ],
        [
            "title" => "Judul Second Post",
            "slug" => "judul-post-kedua",
            "author" => "ulya",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. At tempore, amet illum consectetur, facilis vero ut veritatis in pariatur impedit accusantium praesentium dolorum quia quaerat perferendis! Aut dicta facilis rem rerum officia voluptate voluptates temporibus ipsum excepturi voluptatem. Veniam fugit quis vitae libero ex debitis dicta dolore, officia iusto quos inventore pariatur itaque fuga quidem? Totam ratione laborum harum, reprehenderit esse delectus porro dolores earum? Molestias, qui. Vitae officiis, quis pariatur exercitationem quas voluptate porro, tempore placeat reprehenderit deserunt neque?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug',$slug);
    }
}
