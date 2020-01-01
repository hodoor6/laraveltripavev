<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;



class LessonSix extends Controller
{
//Урок 6 Задача 1 Пусть из действия в представление передается номер дня недели. Сделайте так, чтобы, если передан номер воскресенья, то на экран вывелся текст 'Воскресенье'. Пусть текст выводится в абзаце.
    public function lessonSix1()
    {

        return view('lessonsix.lessonsix1',['dayweek' => date("w",mktime(0,0,0,12,31,2019))]);
    }


//Урок 6 Задача 2 Модифицируйте предыдущую задачу так, чтобы на экран выводилось названия дня недели в том случае, если сегодня выходной день (то есть или суббота или воскресенье). Для решения задачи напишите две директивы @if.
    public function lessonSix2()
    {

        return view('lessonsix.lessonsix2',['dayweek' => date("w",mktime(0,0,0,12,28,2019))]);
    }

}