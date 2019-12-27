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
}
