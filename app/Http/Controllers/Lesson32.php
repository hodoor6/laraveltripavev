<?php

namespace App\Http\Controllers;
use App\Lesson32user;
use Illuminate\Http\Request;


class Lesson32 extends Controller
{


    //Урок 32. (laravel). Задача 1. Пусть дана таблица users с колонками name и salary. Получите все записи.
//Модель User:


public function lesson32_1()

{
 $users=Lesson32user::All();
 dump($users);


    //Урок 32. (laravel). Задача 2. Задача 2. Найти минимальную, максимальную, среднюю зарплату, а также ее сумму.

}



public function lesson32_2()

{
 $users=Lesson32user::All();
   echo 'Минимальная зарплата = '. $users->min('salary').'<br>';
   echo 'Максимальная зарплата = '. $users->max('salary').'<br>';
   echo 'Средняя зарплата = '. $users->avg('salary').'<br>';
   echo 'Сумма зарплат = '. $users->sum('salary').'<br>';

}


    //Урок 32. (laravel). Задача 3. Отсортировать в порядке возрастания и вывести через dump()

    public function lesson32_3()

    {


        $users=Lesson32user::All();
        echo 'Отсортировать по зарплата = ';
        $users = $users->sortBy('salary');

        dump($users);

        echo 'Отсортировать по имени = ';
        $users =  $users->sortBy('name');
        dump($users);

    }

//Урок 33. (laravel). Задача 4. Преобразовать коллекцию в массив и вывести на экран имя и зарплату.

    public function lesson32_4()

    {


        $users=Lesson32user::All();
        echo 'Вывести на экран имя и зарплату = '.'<br>';
        $users = $users->toArray();


       foreach ($users as $user)
       {
           echo 'Имя '. $user['name'] .' Зарплата '. $user['salary'] .'<br>';
       }
        dump($users);


    }
}
