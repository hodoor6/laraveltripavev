<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson31user;
class Lesson31 extends Controller
{

    //Урок 31. (laravel). Задача 1. Пусть в базе данных есть таблица с пользователями. Выведите список всех пользователей (пока без пагинации) в виде HTML таблицы.
    public function Lesson31_1()
    {
        $users = Lesson31user::all();

return view('Lesson31.lesson31-1',['users' =>$users]);

    }



}
