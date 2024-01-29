<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiTest extends TestCase
{
    /**
     * Тест для проверки роута: api/posts, метода getAllPosts
     */
    public function test_get_all_posts()
    {
        // Проверка, что ответ приходит с кодом 200
        $response = $this->get('/api/posts');
        $response->assertStatus(200);

        // Проверка, что 'data' содержит массив (список постов)
        $response->assertJsonStructure([
            'data' => [
                '*' => [
                    // данные ключи должны ходить в ответе:
                    'id',
                    'user_id',
                    'title',
                    'content',
                    'created_at',
                    'updated_at'
                ]
            ]
        ]);
    }
}
