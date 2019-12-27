<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;



class LessonFive extends Controller
{
    // Урок 5. Задача 1 Пусть в действии контроллера даны переменные $name (имя), $age (возраст) и $salary (зарплата). Передайте значения этих переменных в представление и выведите содержимое каждой из этих переменных в отдельном абзаце.
    public function lessonFiveOne()
    {

        return view('lessonfive.lessonfiveone',  ['name'=>'Сергей','age' => '30','salary' => '5000']);
    }

// Урок 5. Задача 2 Пусть в действии контроллера даны переменные $name (имя), $age (возраст) и $salary (зарплата). Передайте значения этих переменных в представление и выведите содержимое каждой из этих переменных в отдельном абзаце.
    public function lessonFiveTwo()
    {

        return view('lessonfive.lessonfivetwo',  ['class'=>'body']);
    }

//Урок 5. Задача 3 Пусть в представлении даны 3 инпута. Передайте из действия в представление 3 переменные, значения которых запишите в атрибуты value наших инпутов. переменную.

    public function lessonFive3()
    {

        return view('lessonfive.lessonfive3',  ['var1'=>'test','var2'=>'test','var3'=>'test']);
    }
}
