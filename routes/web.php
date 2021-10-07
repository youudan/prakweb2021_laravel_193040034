<?php

use Illuminate\Support\Facades\Route;

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
        'title' => 'Home'
    ]);
});


Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name'  => 'Wijdan Muhammad Ridwanulloh',
        'email' => '193040034.wijdan@mail.unpas.ac.id',
        'image' => 'wijdan.png'
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            'title'  => 'Judul Post Pertama',
            'slug'   => 'judul-post-pertama',
            'author' => 'Wijdan Muhammad Ridwanulloh',
            'body'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere exercitationem quo et non id tempore neque ex enim harum laboriosam autem doloremque ratione voluptatem vero optio possimus nostrum quae molestias, quidem corrupti eligendi voluptatum pariatur. In temporibus facere dolorem eos tempora quod ratione soluta suscipit impedit facilis quibusdam ipsam, nihil omnis ducimus dicta. Doloribus vero vel quis perspiciatis eveniet molestiae facilis veniam sunt esse iure. Commodi incidunt corrupti debitis. Vel voluptatum laborum nobis provident tempore nesciunt tempora officiis. Eius, eum!'
        ],
        [
            'title'  => 'Judul Post Kedua',
            'slug'   => 'judul-post-pertama',
            'author' => 'Niki',
            'body'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere exercitationem quo et non id tempore neque ex enim harum laboriosam autem doloremque ratione voluptatem vero optio possimus nostrum quae molestias, quidem corrupti eligendi voluptatum pariatur. In temporibus facere dolorem eos tempora quod ratione soluta suscipit impedit facilis quibusdam ipsam, nihil omnis ducimus dicta. Doloribus vero vel quis perspiciatis eveniet molestiae facilis veniam sunt esse iure. Commodi incidunt corrupti debitis. Vel voluptatum laborum nobis provident tempore nesciunt tempora officiis. Eius, eum!'
        ],
    ];

    return view('posts', [
        'title' => 'Posts',
        'posts' => $blog_posts
    ]);
});

// halaman single post
Route::get('/posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            'title'  => 'Judul Post Pertama',
            'slug'   => 'judul-post-pertama',
            'author' => 'Wijdan Muhammad Ridwanulloh',
            'body'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere exercitationem quo et non id tempore neque ex enim harum laboriosam autem doloremque ratione voluptatem vero optio possimus nostrum quae molestias, quidem corrupti eligendi voluptatum pariatur. In temporibus facere dolorem eos tempora quod ratione soluta suscipit impedit facilis quibusdam ipsam, nihil omnis ducimus dicta. Doloribus vero vel quis perspiciatis eveniet molestiae facilis veniam sunt esse iure. Commodi incidunt corrupti debitis. Vel voluptatum laborum nobis provident tempore nesciunt tempora officiis. Eius, eum!'
        ],
        [
            'title'  => 'Judul Post Kedua',
            'slug'   => 'judul-post-pertama',
            'author' => 'Niki',
            'body'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere exercitationem quo et non id tempore neque ex enim harum laboriosam autem doloremque ratione voluptatem vero optio possimus nostrum quae molestias, quidem corrupti eligendi voluptatum pariatur. In temporibus facere dolorem eos tempora quod ratione soluta suscipit impedit facilis quibusdam ipsam, nihil omnis ducimus dicta. Doloribus vero vel quis perspiciatis eveniet molestiae facilis veniam sunt esse iure. Commodi incidunt corrupti debitis. Vel voluptatum laborum nobis provident tempore nesciunt tempora officiis. Eius, eum!'
        ],
    ];

    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        'title' => 'Single Post',
        'post'  => $new_post
    ]);
});
