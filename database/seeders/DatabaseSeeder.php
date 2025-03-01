<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Category::create([
        //     'name' => 'Web Design',
        //     'slug' => 'web-design',
        // ]);

        // Post::create([
        //     'title' => 'Judul Artikel 1',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'judul-artikel-1',
        //     'body' => 'Mengapa meltryllis adalah best girl di FGO. pertama karena saya suka desain dari karakternya yang agak terbuka namun desain terbuka tersebut disesuaikan dengan sikapnya yang ingin menjadi sorot perhatian sehingga desain tersebut sangat cocok dengan kepribadian dia. Kedua karena dia adalah istri gweh.',
        // ]);

        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all(),
        ])->create();
    }
}
