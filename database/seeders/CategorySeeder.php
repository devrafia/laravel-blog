<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create()

        Category::create([
            'slug' => 'web-design',
            'category' => 'Web Design',
            'color' => 'red',
        ]);

        Category::create([
            'slug' => 'ui-ux',
            'category' => 'UI/UX',
            'color' => 'green',
        ]);

        Category::create([
            'slug' => 'machine-learning',
            'category' => 'Machine Learning',
            'color' => 'blue',
        ]);

        Category::create([
            'slug' => 'data-structure',
            'category' => 'Data Structure',
            'color' => 'yellow',
        ]);
    }
}
