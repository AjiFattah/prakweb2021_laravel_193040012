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
        'name' => 'Aji fattah',
        'email' => 'ajifattah7@gmail.com',
        'image' => 'aji.jpeg'
    ]);
});

Route::get('/blog', function () {

    $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Aji fattah',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima nisi iste corporis suscipit architecto quod, inventore hic voluptates quasi numquam laborum dolorum, debitis, minus sed nostrum. Saepe, ipsum unde autem quisquam nesciunt maxime eum ullam fuga facere, accusamus vel quia quaerat repellat vitae id quidem velit nostrum placeat assumenda, explicabo laboriosam voluptatum. Nemo pariatur accusamus, amet nesciunt commodi tempore facere.'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'renal mutaqin',
            'body' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt molestiae magnam saepe hic numquam. Ab sit dolorum voluptatibus ipsam, doloribus eos eius veniam tempore rem aspernatur officiis saepe quasi. Quae itaque asperiores explicabo adipisci error, laudantium saepe veritatis alias recusandae corporis at illum nemo rerum, velit excepturi laborum neque eius odit ipsum commodi doloremque? Sit saepe vitae quos reprehenderit officiis error labore, unde cum iusto ratione vero aperiam. In itaque nemo atque ut. Optio quaerat quod beatae dolorem quibusdam corrupti!'
        ],
    ];
    return view('posts', [
        'title' => 'Posts',
        'posts' => $blog_posts
    ]);
});


// halaman single post
Route::get('posts/{slug}', function($slug){

    $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Aji fattah',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima nisi iste corporis suscipit architecto quod, inventore hic voluptates quasi numquam laborum dolorum, debitis, minus sed nostrum. Saepe, ipsum unde autem quisquam nesciunt maxime eum ullam fuga facere, accusamus vel quia quaerat repellat vitae id quidem velit nostrum placeat assumenda, explicabo laboriosam voluptatum. Nemo pariatur accusamus, amet nesciunt commodi tempore facere.'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'renal mutaqin',
            'body' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt molestiae magnam saepe hic numquam. Ab sit dolorum voluptatibus ipsam, doloribus eos eius veniam tempore rem aspernatur officiis saepe quasi. Quae itaque asperiores explicabo adipisci error, laudantium saepe veritatis alias recusandae corporis at illum nemo rerum, velit excepturi laborum neque eius odit ipsum commodi doloremque? Sit saepe vitae quos reprehenderit officiis error labore, unde cum iusto ratione vero aperiam. In itaque nemo atque ut. Optio quaerat quod beatae dolorem quibusdam corrupti!'
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if($post['slug'] == $slug){
            $new_post = $post;
        }
    }

    return view('post', [
        'title' => 'Single Post',
        'post' => $new_post
    ]);
});