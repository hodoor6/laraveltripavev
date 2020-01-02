<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;



class LessonSeven extends Controller
{
//Урок 7 Задача 1 Передайте из действия в представление массив с числами. Выведите этот массив в виде списка ul.
    public function lessonSeven1()
    {

        return view('lessonseven.lessonseven1',['numbers' => [1,2,3,4,5]]);
    }


}