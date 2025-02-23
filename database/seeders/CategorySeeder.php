<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
            'color' => 'red'
        ]);

        Category::create([
            'name' => 'UI UX',
            'slug' => 'ui-ux',
            'color' => 'green',
        ]);

        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning',
            'color' => 'orange',
        ]);

        Category::create([
            'name' => 'Data Science',
            'slug' => 'data-science',
            'color' => 'yellow',
        ]);

        Category::create([
            'name' => 'Cyber Security',
            'slug' => 'cyber-security',
            'color' => 'blue',
        ]);
    }
}
