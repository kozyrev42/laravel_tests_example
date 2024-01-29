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
