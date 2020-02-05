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
}

}
