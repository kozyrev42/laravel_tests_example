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

    /**
     * Тест для проверки роута: POST '/posts/create'
     * Метод: createPost
     */

    public function test_create_post()
    {
        $response = $this->post('/api/posts/create', [
            'user_id' => 111,
            'title' => 'Test title 111',
            'content' => 'Test content 111',
        ]);

        // проверяем что ответ приходит с кодом 200
        $response->assertStatus(200);

        // проверяем что пост создан с user_id = 111
        $response->assertJsonPath('data.user_id', 111);

        // проверяем что в базе данных, в таблице posts, есть пост с title = 'Test title 111'
        $this->assertDatabaseHas('posts', ['title' => 'Test title 111']);
    }
}
