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

// Урок 21. (laravel). Задача 11 Из таблицы employees получите работников, зарплата которых находится в промежутке от 450 до 1100.
    public function lesson21_11()
    {

        $users = DB::table('employees')->whereBetween(	'salary', [450,1100])->get();

        return view('lesson21.lesson21-2', ['users' => $users]);
    }

// Урок 21. (laravel). Задача 12 Из таблицы employees получите работников, зарплата которых находится НЕ в промежутке от 300 до 600.
    public function lesson21_12()
    {

        $users = DB::table('employees')->whereNotBetween(	'salary', [300,600])->get();

        return view('lesson21.lesson21-2', ['users' => $users]);
    }


    // Урок 21. (laravel).Задача 13 Из таблицы employees получите работников с id, равными 1, 2, 3 и 5.
    public function lesson21_13()
    {

        $users = DB::table('employees')->whereIn(	'id', [1,2,3,5])->get();

        return view('lesson21.lesson21-2', ['users' => $users]);
    }


    // Урок 21. (laravel).Задача 14 Из таблицы employees получите работников с id, НЕ равными 1, 2, 3.
    public function lesson21_14()
    {

        $users = DB::table('employees')->whereNotIn(	'id', [1,2,3])->get();

        return view('lesson21.lesson21-2', ['users' => $users]);
    }


    // Урок 21. (laravel).  Задача 15 Из таблицы employees получите работников, у которых зарплата id от 1 до 3, либо зарплата от 400 до 800.
    public function lesson21_15()
    {

        $users = DB::table('employees')->whereIn(	'id', [1,2,3])->orWhere(function($query)
        {$query->whereBetween(	'salary', [600,800]);}) ->get();

        return view('lesson21.lesson21-2', ['users' => $users]);
    }



// Урок 21. (laravel).  Задача 16 Из таблицы employees получите работников, у которых зарплата равна 500 ИЛИ должность 'программист'.
    public function lesson21_16()
    {
        $users = DB::table('employees')->whereSalaryOrPosition(500,'программист')->get();

        return view('lesson21.lesson21-2', ['users' => $users]);
    }

// Урок 21. (laravel).  Задача 17 Из таблицы employees получите работников, у которых зарплата равна 500 И должность 'программист'.
    public function lesson21_17()
    {
        $users = DB::table('employees')->whereSalaryAndPosition(500,'программист')->get();

        return view('lesson21.lesson21-2', ['users' => $users]);
    }

// Урок 21. (laravel).  Задача 18 Сделайте таблицу events (мероприятия), с полями id, name (название), start (начало мероприятия), finish (конец мероприятия).

// Урок 21. (laravel).  Задача 19 Из таблицы events получите мероприятия, у которых дата начала и дата конца приходится на один и тот же день.
    public function lesson21_19()
    {
        $events = DB::table('events')->whereColumn('start', '=','finish' )->get();

        return view('lesson21.lesson21-19', ['events' => $events]);
    }




// Урок 21. (laravel).  Задача 20 Из таблицы employees получите всех работников и отсортируйте их по возрастанию зарплаты.
public function lesson21_20()
{
    $users = DB::table('employees')->orderBy('salary','asc')->get();

    return view('lesson21.lesson21-2', ['users' => $users]);
}


// Урок 21. (laravel).  Задача 21 Из таблицы employees получите всех работников и отсортируйте их по убыванию даты рождения.
public function lesson21_21()
{
    $users = DB::table('employees')->orderBy('birthday','desc')->get();

    return view('lesson21.lesson21-2', ['users' => $users]);
}

// Урок 21. (laravel).  Задача 22 Из таблицы employees получите максимальную зарплату.
public function lesson21_22()
{
    $users = DB::table('employees')->max('Salary');

    return view('lesson21.lesson21-22', ['users' => $users]);
}
// Урок 21. (laravel).  Задача 23 Из таблицы employees получите суммарную зарплату всех работников.
public function lesson21_23()
{
    $users = DB::table('employees')->sum('Salary');

    return view('lesson21.lesson21-23', ['users' => $users]);
}

// Урок 21. (laravel).  Задача 24 Из таблицы employees для каждой должности получите минимальную зарплату.
public function lesson21_24()
{
    $users = DB::table('employees')
        ->select('position', DB::raw('min(salary) as salary'))
        ->groupBy('position')
        ->havingRaw('min(salary)')
        ->get();
    return view('lesson21.lesson21-24', ['users' => $users]);
}


// Урок 21. (laravel).  Задача 25 Из таблицы employees для каждой должности получите суммарную зарплату.
public function lesson21_25()
{
    $users = DB::table('employees')
        ->select('position', DB::raw('sum(salary) as salary'))
        ->groupBy('position')
        ->havingRaw('sum(salary)')
        ->get();


    return view('lesson21.lesson21-24', ['users' => $users]);
}

}
