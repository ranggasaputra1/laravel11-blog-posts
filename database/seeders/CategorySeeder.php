<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
    }
}
