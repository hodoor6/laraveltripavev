<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Lesson22 extends Controller
{

// Урок 22. (laravel). Задача 1. Сделайте через PhpMyAdmin таблицу users с полями id, login (логин), password (пароль), email (адрес).
// Урок 22. (laravel). Задача 2. С помощью построителя запросов добавьте нового юзера в таблицу users.


    public function lesson22_2()
    {
        $users = DB::table('users22')->insertGetId(['login' => 'login1', 'password' => 'password1', 'email' => 'john@example.com']);
    }


// Урок 22. (laravel). Задача 3. С помощью построителя запросов добавьте сразу 3 новых юзера в таблицу users.

    public function lesson22_3()
    {
        $users = DB::table('users22')->insert([
            ['login' => 'login2', 'password' => 'password2', 'email' => 'john2@example.com'],
            ['login' => 'login3', 'password' => 'password3', 'email' => 'john3@example.com'],
            ['login' => 'login4', 'password' => 'password4', 'email' => 'john4@example.com']
        ]);
    }

    // Урок 22. (laravel). Задача 4. С помощью построителя запросов поменяйте логин и email какому-нибудь юзеру из таблицы users.

    public function lesson22_4()
    {
        $users = DB::table('users22')->where('id','=',4)->update(

            ['login' => 'login444', 'password' => 'password444', 'email' => 'john444@example.com']
        );
    }




}

