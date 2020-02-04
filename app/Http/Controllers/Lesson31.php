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

//Урок 31. (laravel). Задача 2. Модифицируйте предыдущую задачу так, чтобы пользователи выводились по 10 штук на страницу.
    public function Lesson31_2()
    {
        $users = Lesson31user::paginate(15);

        $users1 = Lesson31user::simplePaginate(15);

        return view('Lesson31.lesson31-2',['users' =>$users,'users1' =>$users1]);

    }

}
