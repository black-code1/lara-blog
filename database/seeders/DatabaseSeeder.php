<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::truncate();
         Post::truncate();
         Category::truncate();

         $user = User::factory()->create();

         $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
         ]);

         $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

         $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

         Post::create([
             'user_id' => $user->id,
             'category_id' => $family->id,
             'title' => 'My Family Post',
             'slug' => 'my-first-post',
             'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
             'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet assumenda corporis deleniti deserunt dolor dolorem eligendi enim, et exercitationem facere illo illum maiores natus necessitatibus saepe soluta tempora tempore tenetur vero. Aut delectus dignissimos doloremque doloribus, eveniet explicabo fuga harum in ipsa nam nihil pariatur perferendis perspiciatis, porro rem saepe sequi tenetur veritatis, vero voluptate. Distinctio impedit nobis voluptas.</p>'
         ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => '<p>Lorem ipsum dolar sit amet.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet assumenda corporis deleniti deserunt dolor dolorem eligendi enim, et exercitationem facere illo illum maiores natus necessitatibus saepe soluta tempora tempore tenetur vero. Aut delectus dignissimos doloremque doloribus, eveniet explicabo fuga harum in ipsa nam nihil pariatur perferendis perspiciatis, porro rem saepe sequi tenetur veritatis, vero voluptate. Distinctio impedit nobis voluptas.</p>'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
