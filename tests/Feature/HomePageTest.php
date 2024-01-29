<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    /**
     * A basic feature test example.
     */

    // метод 'test_example' создает тест
    // метод тестирования должен начинаться со слова 'test_',
    // после слова 'test_' следует описание теста, того функционала который будет проверяться
    public function test_home_page_status_code(): void
    {

        // отправляет HTTP GET-запрос на корневой маршрут ('/')
        // после выполнения запроса, ответ от вашего приложения сохраняется в переменную $response
        $response = $this->get('/');

        // метод 'assertStatus' проверяет, соответствует ли статусный код ответа '200', если нет, то тест не пройден
        $response->assertStatus(200);
    }
}
