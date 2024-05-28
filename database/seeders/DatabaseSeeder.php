<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory(3)->create();

        Category::create([
            'name'=>'Web Programming',
            'slug'=>'Web-Programming',
        ]);
        Category::create([
            'name'=>'Web Design',
            'slug'=>'Web-Design',
        ]);
        Category::create([
            'name'=>'Personal',
            'slug'=>'personal',
        ]);
        Post::factory(100)->create();
    }
}
