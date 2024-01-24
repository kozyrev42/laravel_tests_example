<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use Database\Factories\PostFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * 
     * php artisan db:seed
     */
    public function run(): void
    {
        // создание постов в количестве 2, обращение к фабрике через модель
        Post::factory(2)->create();

        // создание постов в количестве 2, обращение к фабрике на прямую
        PostFactory::new()->count(2)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
