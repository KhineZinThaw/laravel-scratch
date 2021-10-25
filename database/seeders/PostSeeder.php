<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'My hobby post',
            'title' => 'My Hobby Post',
            'excerpt' => 'Lorem ipsum dolor sit amet',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem assumenda fuga accusamus quibusdam id, ducimus, harum porro fugit quam similique repellat sit deserunt cum! Libero fugiat quod doloremque nisi nam?'
        ]);

        Post::create([
            'category_id' => 2,
            'user_id' => 2,
            'slug' => 'My work post',
            'title' => 'My Work Post',
            'excerpt' => 'Lorem ipsum dolor sit amet',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem assumenda fuga accusamus quibusdam id, ducimus, harum porro fugit quam similique repellat sit deserunt cum! Libero fugiat quod doloremque nisi nam?'
        ]);

        Post::create([
            'category_id' => 3,
            'user_id' => 3,
            'slug' => 'My feeling post',
            'title' => 'My feeling Post',
            'excerpt' => 'Lorem ipsum dolor sit amet',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem assumenda fuga accusamus quibusdam id, ducimus, harum porro fugit quam similique repellat sit deserunt cum! Libero fugiat quod doloremque nisi nam?'
        ]);
    }
}
