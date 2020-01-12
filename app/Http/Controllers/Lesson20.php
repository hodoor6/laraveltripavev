<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class Lesson20 extends Controller
{

// Урок 20. (laravel). Задача 1.Сделайте через PhpMyAdmin таблицу users с полями id, name (имя), surname (фамилия), age (возраст). Добавьте в эту таблицу 5 юзеров.

// Урок 20. (laravel). Задача 2. С помощью фасада DB получите всех юзеров, возраст которых более 18 лет. Передайте полученных юзеров в представление и выведите их в виде таблицы table.


public function lesson20_2()
{


    $users = DB::select('select * from users where age > ?',[18]);

    return view('lesson20.lesson20-2', ['users' => $users]);
}

// Урок 20. (laravel). Задача 3. С помощью фасада DB добавьте нового юзера в таблицу users.

public function lesson20_3()
{


    $insert = DB::insert('insert into users (name,surname, age) value (?,?,?)', ['Иван', 'Пушкин','25']);
    if ($insert) {
        echo 'Запись выполнена';
    } else {
        echo 'Извините, какая-то ошибка!';
    }

    return redirect('/lesson20-2/');
}


// Урок 20. (laravel). Задача 4. С помощью фасада DB удалите какого-нибудь нового юзера из таблицы users.

public function lesson20_4()
{



    $delete =  DB::delete('delete from users where name = :name and surname = :surname', ['name' => 'Иван', 'surname' => 'Пушкин']);
    if ($delete) {
        echo 'Запись удалена';
    } else {
        echo 'Извините, какая-то ошибка!';
    }

    return redirect('/lesson20-2/');
}
    }

