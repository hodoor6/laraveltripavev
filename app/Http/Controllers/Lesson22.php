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


    $users = DB::table('users22')->insertGetId(['login'=>'login1','password'=> 'password1','email' => 'john@example.com']);


}
}

