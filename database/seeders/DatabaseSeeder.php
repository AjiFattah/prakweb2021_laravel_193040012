<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Aji fattah',
            'email' => 'ajifattah7@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'renal mutaqin',
            'email' => 'renalmutaqin@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, cum, libero amet rerum cumque dolorem corporis expedita quibusdam, accusamus vitae debitis iusto officia repudiandae deleniti tempora ipsa sed quod?',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, cum, libero amet rerum cumque dolorem corporis expedita quibusdam, accusamus vitae debitis iusto officia repudiandae deleniti tempora ipsa sed quod? Ea, voluptate quis assumenda pariatur eveniet qui aspernatur in, laboriosam rem reiciendis obcaecati magni, fuga hic animi eligendi quas corrupti labore consequatur tempora unde excepturi itaque sunt modi! Consectetur a repellendus illo! Ut labore illo at minima esse ducimus voluptatibus officia harum, natus placeat temporibus eaque ipsam distinctio unde soluta, rem perspiciatis nulla itaque rerum, pariatur amet sequi ad cumque neque? Recusandae sapiente illo laboriosam ut voluptates officiis quo commodi accusamus!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, cum, libero amet rerum cumque dolorem corporis expedita quibusdam, accusamus vitae debitis iusto officia repudiandae deleniti tempora ipsa sed quod?',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, cum, libero amet rerum cumque dolorem corporis expedita quibusdam, accusamus vitae debitis iusto officia repudiandae deleniti tempora ipsa sed quod? Ea, voluptate quis assumenda pariatur eveniet qui aspernatur in, laboriosam rem reiciendis obcaecati magni, fuga hic animi eligendi quas corrupti labore consequatur tempora unde excepturi itaque sunt modi! Consectetur a repellendus illo! Ut labore illo at minima esse ducimus voluptatibus officia harum, natus placeat temporibus eaque ipsam distinctio unde soluta, rem perspiciatis nulla itaque rerum, pariatur amet sequi ad cumque neque? Recusandae sapiente illo laboriosam ut voluptates officiis quo commodi accusamus!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, cum, libero amet rerum cumque dolorem corporis expedita quibusdam, accusamus vitae debitis iusto officia repudiandae deleniti tempora ipsa sed quod?',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, cum, libero amet rerum cumque dolorem corporis expedita quibusdam, accusamus vitae debitis iusto officia repudiandae deleniti tempora ipsa sed quod? Ea, voluptate quis assumenda pariatur eveniet qui aspernatur in, laboriosam rem reiciendis obcaecati magni, fuga hic animi eligendi quas corrupti labore consequatur tempora unde excepturi itaque sunt modi! Consectetur a repellendus illo! Ut labore illo at minima esse ducimus voluptatibus officia harum, natus placeat temporibus eaque ipsam distinctio unde soluta, rem perspiciatis nulla itaque rerum, pariatur amet sequi ad cumque neque? Recusandae sapiente illo laboriosam ut voluptates officiis quo commodi accusamus!',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, cum, libero amet rerum cumque dolorem corporis expedita quibusdam, accusamus vitae debitis iusto officia repudiandae deleniti tempora ipsa sed quod?',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, cum, libero amet rerum cumque dolorem corporis expedita quibusdam, accusamus vitae debitis iusto officia repudiandae deleniti tempora ipsa sed quod? Ea, voluptate quis assumenda pariatur eveniet qui aspernatur in, laboriosam rem reiciendis obcaecati magni, fuga hic animi eligendi quas corrupti labore consequatur tempora unde excepturi itaque sunt modi! Consectetur a repellendus illo! Ut labore illo at minima esse ducimus voluptatibus officia harum, natus placeat temporibus eaque ipsam distinctio unde soluta, rem perspiciatis nulla itaque rerum, pariatur amet sequi ad cumque neque? Recusandae sapiente illo laboriosam ut voluptates officiis quo commodi accusamus!',
            'category_id' => 2,
            'user_id' => 2
        ]);

    }
}