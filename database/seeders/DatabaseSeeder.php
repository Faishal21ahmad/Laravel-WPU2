<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
    
     */
    public function run()
    {
        User::factory(3)->create();

        Kategori::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Kategori::create([
            'name' => 'Web Design',
            'slug' => 'web_design'
        ]);


        Kategori::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        User::create([
            'name' => 'Faishal Ahmad Fathuni',
            'username' => 'Ishal',
            'email' => 'faishal@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(10)
        ]);

        // User::create([
        //     'name' => 'Ahmad Ishal',
        //     'email' => 'ishal@gmail.com',
        //     'password' => bcrypt('1234ss')
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, possimus!',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione aspernatur eligendi similique reiciendis, eius repudiandae laborum officia provident enim id animi. Quo voluptatem soluta laudantium ratione quas accusantium. Dolorum ut labore cum at! Asperiores error molestiae, alias maxime eligendi animi modi. Accusantium suscipit deleniti minus quo quia molestias omnis quasi?',
        //     'kategori_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, possimus!',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione aspernatur eligendi similique reiciendis, eius repudiandae laborum officia provident enim id animi. Quo voluptatem soluta laudantium ratione quas accusantium. Dolorum ut labore cum at! Asperiores error molestiae, alias maxime eligendi animi modi. Accusantium suscipit deleniti minus quo quia molestias omnis quasi?',
        //     'kategori_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, possimus!',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione aspernatur eligendi similique reiciendis, eius repudiandae laborum officia provident enim id animi. Quo voluptatem soluta laudantium ratione quas accusantium. Dolorum ut labore cum at! Asperiores error molestiae, alias maxime eligendi animi modi. Accusantium suscipit deleniti minus quo quia molestias omnis quasi?',
        //     'kategori_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, possimus!',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione aspernatur eligendi similique reiciendis, eius repudiandae laborum officia provident enim id animi. Quo voluptatem soluta laudantium ratione quas accusantium. Dolorum ut labore cum at! Asperiores error molestiae, alias maxime eligendi animi modi. Accusantium suscipit deleniti minus quo quia molestias omnis quasi?',
        //     'kategori_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kelima',
        //     'slug' => 'judul-kelima',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, possimus!',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione aspernatur eligendi similique reiciendis, eius repudiandae laborum officia provident enim id animi. Quo voluptatem soluta laudantium ratione quas accusantium. Dolorum ut labore cum at! Asperiores error molestiae, alias maxime eligendi animi modi. Accusantium suscipit deleniti minus quo quia molestias omnis quasi?',
        //     'kategori_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
