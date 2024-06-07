<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Banner;
use App\Models\Post;
use App\Models\Prestasi;
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

        Post::factory(10)->create();
        
        Banner::create([
            'name' => '1717747749_20240110_091540.jpg'
        ]);
        Banner::create([
            'name' => '1717747749_20240110_091540.jpg'
        ]);
        Banner::create([
            'name' => '1717747749_20240110_091540.jpg'
        ]);

        
        Prestasi::create([
            'foto_murid' => '1717753893_Screenshot 2024-05-03 192712.png',
            'nama' => 'Rafi A.',
            'kelas' => 'XI PPLG 1',
            'perolehan' => 'Juara 2',
            'bidang' => 'Website Tech',
            'perlombaan' => 'Lks Smk',
            'tingkat' => 'Provinsi',
            'periode' => '2024 - 2025'
        ]);

        Prestasi::create([
            'foto_murid' => '1717753942_Screenshot 2023-11-05 160319.png',
            'nama' => 'A. Farel',
            'kelas' => 'XI PPLG 1',
            'perolehan' => 'Juara Harapan 1',
            'bidang' => 'IT Solution',
            'perlombaan' => 'Lks Smk',
            'tingkat' => 'Provinsi',
            'periode' => '2024 - 2025'
        ]);

        Prestasi::create([
            'foto_murid' => '1717753857_Screenshot 2024-05-03 232326.png',
            'nama' => 'Denis',
            'kelas' => 'XI PPLG 1',
            'perolehan' => 'Juara 3',
            'bidang' => 'Cyber Security',
            'perlombaan' => 'Lks Smk',
            'tingkat' => 'Provinsi',
            'periode' => '2024 - 2025'
        ]);

        User::create([
            'username' => 'kepo',
            'password' => 'kepo'
        ]);
    }
}
