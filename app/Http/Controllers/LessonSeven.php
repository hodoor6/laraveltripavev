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


//Урок 7 Задача 2 Модифицируйте предыдущую задачу так, чтобы в пункты списка выводились квадраты элементов массива.
    public function lessonSeven2()
    {

        return view('lessonseven.lessonseven2',['numbers' => [1,2,3,4,5]]);
    }


}