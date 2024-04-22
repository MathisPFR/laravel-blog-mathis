<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        

        User::factory(3)->create();

        User::factory()->create([
            'name' => 'User Admin',
            'email' => 'test@example.com',
            'password' => bcrypt('test'),
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'User Simple',
            'email' => 'user@exemple.com',
            'password' => bcrypt('test'),
            'role' => 'normal',
        ]);

        // post::factory(10)->create();

        $this->call([
            CategorySeeder::class,
            UsersTableSeeder::class
        ]);

       $categories = Category::factory(4)->create();

        Post::factory(20)->create()->each(function($posts) use ($categories) {
            $posts->categorie()->attach($categories->random());
               
        });

    }


        

        
        







}

