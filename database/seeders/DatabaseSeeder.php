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

        // User::create([
        //     'name' => 'Arif Wahyu',
        //     'email' => 'arifwahyu@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Dika Pras',
        //     'email' => 'dika@gmail.com',
        //     'password' => bcrypt('2231')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal Life',
            'slug' => 'personal-life'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, error?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ea quam magnam adipisci aspernatur, maiores id enim voluptatibus odio aliquid, molestias excepturi debitis est modi odit natus delectus ipsum ipsa repudiandae. Vitae dolore eveniet quisquam a! Quam repellat dolorum enim quibusdam necessitatibus rem tempora voluptas libero corporis molestias totam accusamus atque veniam et odit autem corrupti inventore vitae deleniti laboriosam similique maiores, quaerat tempore explicabo. Accusamus maxime, autem, esse inventore ut, possimus quo pariatur incidunt itaque quis delectus quas explicabo nulla error reiciendis reprehenderit culpa assumenda at. Quia perspiciatis aspernatur architecto, blanditiis aperiam sit, ratione unde deleniti asperiores alias ipsum?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, error?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ea quam magnam adipisci aspernatur, maiores id enim voluptatibus odio aliquid, molestias excepturi debitis est modi odit natus delectus ipsum ipsa repudiandae. Vitae dolore eveniet quisquam a! Quam repellat dolorum enim quibusdam necessitatibus rem tempora voluptas libero corporis molestias totam accusamus atque veniam et odit autem corrupti inventore vitae deleniti laboriosam similique maiores, quaerat tempore explicabo. Accusamus maxime, autem, esse inventore ut, possimus quo pariatur incidunt itaque quis delectus quas explicabo nulla error reiciendis reprehenderit culpa assumenda at. Quia perspiciatis aspernatur architecto, blanditiis aperiam sit, ratione unde deleniti asperiores alias ipsum?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, error?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ea quam magnam adipisci aspernatur, maiores id enim voluptatibus odio aliquid, molestias excepturi debitis est modi odit natus delectus ipsum ipsa repudiandae. Vitae dolore eveniet quisquam a! Quam repellat dolorum enim quibusdam necessitatibus rem tempora voluptas libero corporis molestias totam accusamus atque veniam et odit autem corrupti inventore vitae deleniti laboriosam similique maiores, quaerat tempore explicabo. Accusamus maxime, autem, esse inventore ut, possimus quo pariatur incidunt itaque quis delectus quas explicabo nulla error reiciendis reprehenderit culpa assumenda at. Quia perspiciatis aspernatur architecto, blanditiis aperiam sit, ratione unde deleniti asperiores alias ipsum?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
