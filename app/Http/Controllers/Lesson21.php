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


// Урок 21. (laravel). Задача 4. Из таблицы employees получите всех работников с зарплатой 500.


    public function lesson21_4()
    {


        $users = DB::table('employees')->where('salary', '500')->get();

        return view('lesson21.lesson21-2', ['users' => $users]);
    }

    // Урок 21. (laravel). Задача 5. Из таблицы employees получите всех работников с зарплатой более 450.
    public function lesson21_5()
    {


        $users = DB::table('employees')->where('salary', '>', '450')->get();

        return view('lesson21.lesson21-2', ['users' => $users]);



    }
    // Урок 21. (laravel). Задача 6. Из таблицы employees получите всех работников с зарплатой, не равной 500.

    public function lesson21_6()
    {


        $users = DB::table('employees')->where('salary', '!=', '500')->get();

        return view('lesson21.lesson21-2', ['users' => $users]);
    }


    // Урок 21. (laravel). Задача 7. Из таблицы employees получите всех работников с зарплатой 400 или id, большем 4.

    public function lesson21_7()
    {


        $users = DB::table('employees')->where('salary', '=', '400')->Orwhere('id', '>', '4')->get();

        return view('lesson21.lesson21-2', ['users' => $users]);
    }

    // Урок 21. (laravel). Задача 8. Из таблицы employees получите работника с id, равным 3.

    public function lesson21_8()
    {

        $users = DB::table('employees')->where(	'id', 3)->first();

        return view('lesson21.lesson21-8', ['user' => $users]);
    }

// Урок 21. (laravel). Задача 9 Из таблицы employees получите работника имя работника id, равным 5.
    public function lesson21_9()
    {

        $users = DB::table('employees')->where(	'id', 5)->value(	'name');

        return view('lesson21.lesson21-9', ['users' => $users]);
    }

// Урок 21. (laravel). Задача 10 Из таблицы employees получите массив имен работников.
    public function lesson21_10()
    {

        $users = DB::table('employees')->pluck(	'name', 'id');

        return view('lesson21.lesson21-10', ['users' => $users]);
    }

}

