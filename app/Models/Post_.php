<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
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

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();

        // $post = [];
        // foreach ($posts as $p) {
        //     if($p['slug'] == $slug){
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}