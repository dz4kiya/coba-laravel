<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Foreach_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Dzakiya Ishmatul",
        "email" => "dishmatul@gmail.com",
        "image" => "img/dzakiya.JPG"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "dzakiya",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. At tempore, amet illum consectetur, facilis vero ut veritatis in pariatur impedit accusantium praesentium dolorum quia quaerat perferendis! Aut dicta facilis rem rerum officia voluptate voluptates temporibus ipsum excepturi voluptatem. Veniam fugit quis vitae libero ex debitis dicta dolore, officia iusto quos inventore pariatur itaque fuga quidem? Totam ratione laborum harum, reprehenderit esse delectus porro dolores earum? Molestias, qui. Vitae officiis, quis pariatur exercitationem quas voluptate porro, tempore placeat reprehenderit deserunt neque?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "ulya",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. At tempore, amet illum consectetur, facilis vero ut veritatis in pariatur impedit accusantium praesentium dolorum quia quaerat perferendis! Aut dicta facilis rem rerum officia voluptate voluptates temporibus ipsum excepturi voluptatem. Veniam fugit quis vitae libero ex debitis dicta dolore, officia iusto quos inventore pariatur itaque fuga quidem? Totam ratione laborum harum, reprehenderit esse delectus porro dolores earum? Molestias, qui. Vitae officiis, quis pariatur exercitationem quas voluptate porro, tempore placeat reprehenderit deserunt neque?"
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});



//halaman single posts
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "dzakiya",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. At tempore, amet illum consectetur, facilis vero ut veritatis in pariatur impedit accusantium praesentium dolorum quia quaerat perferendis! Aut dicta facilis rem rerum officia voluptate voluptates temporibus ipsum excepturi voluptatem. Veniam fugit quis vitae libero ex debitis dicta dolore, officia iusto quos inventore pariatur itaque fuga quidem? Totam ratione laborum harum, reprehenderit esse delectus porro dolores earum? Molestias, qui. Vitae officiis, quis pariatur exercitationem quas voluptate porro, tempore placeat reprehenderit deserunt neque?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "ulya",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. At tempore, amet illum consectetur, facilis vero ut veritatis in pariatur impedit accusantium praesentium dolorum quia quaerat perferendis! Aut dicta facilis rem rerum officia voluptate voluptates temporibus ipsum excepturi voluptatem. Veniam fugit quis vitae libero ex debitis dicta dolore, officia iusto quos inventore pariatur itaque fuga quidem? Totam ratione laborum harum, reprehenderit esse delectus porro dolores earum? Molestias, qui. Vitae officiis, quis pariatur exercitationem quas voluptate porro, tempore placeat reprehenderit deserunt neque?"
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
