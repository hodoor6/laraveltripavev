<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;



class LessonEight extends Controller
{
// Урок 8 Задача 1 Сделайте данную верстку макетом вашего сайта так, чтобы в тег main загружались представления действий контроллеров.
    public function lessonEight1()
    {

        return view('lessoneight.child1',['main' => 'Здесь содержание контента тега main']);


    }


// Урок 8 Задача 2 Сделайте так, чтобы каждое действие отправляло в представление переменную $title, содержащую тайтл страницы. Модифицируйте код предыдущей задачи так, чтобы переданный тайтл попадал в тег title макета сайта.


    public function lessonEight2()
    {

        return view('lessoneight.child2',['main' => 'Здесь содержание контента тега main' , 'title' =>'Заголовок главной страницы']);


    }


}