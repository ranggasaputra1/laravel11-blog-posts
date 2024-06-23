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
            'color' => 'red',
        ]);
        Category::create([
            'name'=>'Web Design',
            'slug'=>'Web-Design',
            'color' => 'green',
        ]);
        Category::create([
            'name'=>'Personal',
            'slug'=>'personal',
            'color' => 'blue',
        ]);
        Category::create([
            'name'=>'UI UX',
            'slug'=>'ui-ux',
            'color' => 'yellow',
        ]);
    }
}
