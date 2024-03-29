<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

`php -S 127.0.0.1:8000 -t public`

1. Установка проекта: `composer create-project --prefer-dist laravel/laravel laravel_tests_example`

2. Базу данных использую "laravel_redis_base";
- создал модель и фабрику: `php artisan make:model Post -f`

- редактирован сид DatabaseSeeder, для заполнения таблицы "posts"

3. Генерим файл-тест:
`php artisan make:test HomePageTest`

- запуск запуск тестов:
`php artisan test`

4. Создан роут, контроллер, для получения всех постов.
- Генерим файл-тест ApiTest
- в тесте проверяем структуру ответа "json"

5. Создан роут, метод для создания поста. Написан Тест "test_create_post" на создание поста и проверки созданных данных.

6. - Написан сервис CalculatorService.
- написан юнит-тест CalculatorServiceTest
- команда для запуска теста `./vendor/bin/phpunit`

Юнит-тесты предназначены для тестирования отдельных компонентов приложения, таких как методы классов или функции, изолированно от остальной части системы.
Эти тесты полезны для проверки основной бизнес-логики приложения.

Функциональные тесты проверяют отдельные части приложения в контексте запросов и ответов.
Они могут использоваться для тестирования HTTP маршрутов, контроллеров, аутентификации пользователя и других аспектов приложения, связанных с взаимодействием пользователя.