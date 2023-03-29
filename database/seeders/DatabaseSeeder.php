<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        User::create([
            'name' => 'Super Admin',
            'user_type' => 1,
            'email' => 'super@admin.com',
            'password' => bcrypt('password') ,
        ]);






         User::create([
            'name' => 'Modarator',
            'email' => 'modarator@test.com',
            'user_type' =>2,
            'password' => bcrypt('password') ,
         ]);

        User::create([
            'name' => 'Client',
            'email' => 'client@test.com',
            'password' => bcrypt('password') ,
        ]);



        $course = Course::create([
            'name' => 'Laravel',
            'description' => 'Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.',
            'image' => 'https://laravel.com/img/logomark.min.svg',
            'price' => 500
        ]);

    }
}
