<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // berita::create([
        //     "judul" => "riko terjatuh di tangga",
        //     "excerpt" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit.",
        //     "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam vero repellat nemo nesciunt ut debitis doloribus cum fugiat assumenda, dignissimos fuga molestiae quis vel aut ipsum suscipit deleniti dolorem id, dolorum voluptatem! Numquam minus cupiditate, iure odio accusamus quidem qui quasi earum ullam voluptate totam labore necessitatibus adipisci fugiat quod."
        // ]);

        // Post::factory(10)->create();

        User::create([
            'username' => 'kepo',
            'password' => 'kepo'
        ]);
    }
}
