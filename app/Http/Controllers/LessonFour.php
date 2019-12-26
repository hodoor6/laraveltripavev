<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;



class LessonFour extends Controller
{
    // Урок 4. Задача 1 Сделайте представление для какого-нибудь действия одного из ваших контроллеров.
    public function lessonFourOne()
    {
        return view('LessonFour');



 }

    // Урок 4. Задача 2 Пусть в действии контроллера даны переменные $name (имя), $surname (фамилия). Передайте значения этих переменных в представление и выведите содержимое каждой из этих переменных на экран.




    public function lessonFourTwo()
    {
        return view('lessonfour',  ['name'=>'Сергей','surname' => 'Сергеев']);
    }

    // Урок 4. Задача 3 Перенесите ваше представление в соответствующую папку.
    public function lessonFourThree()
    {
        return view('lessonfour.lessonfourthree',  ['name'=>'Сергей','surname' => 'Сергеев']);
    }
}
