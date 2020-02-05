<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lesson34 extends Controller
{
    //Урок 34. (laravel). Задача 1. Создать миграцию для таблицы messages.

/*php artisan make:migration create_lesson34messages_table --create=lesson34messages*/
}

//Урок 34. (laravel). Задача 2. Добавить столбцы 'text' и 'user_id'. , description Выполнить миграцию.
//php artisan migrate


//Урок 34. (laravel). Задача 3. Сделайте откат миграции.
//php artisan migrate:rollback
//
//Таблица удалена.

//Урок 34. (laravel). Задача 4. Сделайте заново миграцию с условиями: 1) создать таблицу messages; 2) добавить поле users_id; 3) переименовать таблицу в posts; 4) добавить столбец text после столбца id.

# php artisan make:migration create_lesson34messages2_table --create=lesson34messages2

//Урок 34 Задача 5. Переименуйте колонку text в message.
//php artisan make:migration create_lesson34messages2_table --table=lesson34post

//Урок 35. (laravel). Задача 6. Изменить тип колонки message из text в varchar с длиной 40.

# php artisan make:migration create_lesson34messages2_table --table=lesson34post
