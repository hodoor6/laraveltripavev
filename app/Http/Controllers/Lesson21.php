<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class Lesson21 extends Controller
{

// Урок 21. (laravel). Задача 1. Сделайте через PhpMyAdmin таблицу employees (работники) с полями id, name (имя), birthday (дата рождения), position (должность), salary (зарплата). Добавьте в эту таблицу следующих работников:

// Урок 21. (laravel). Задача 2. Получите все записи из таблицы employees и выведите их в представлении в виде таблицы table.


public function lesson21_2()
{


    $users = DB::table('employees')->get();

    return view('lesson21.lesson21-2', ['users' => $users]);
}

// Урок 21. (laravel). Задача 2. Модифицируйте предыдущую задачу так, чтобы запрос получал только поле с именем и поле с зарплатой работника.
public function lesson21_3()
{


    $users = DB::table('employees')->select('name','salary')->get();

    return view('lesson21.lesson21-3', ['users' => $users]);
}




}

