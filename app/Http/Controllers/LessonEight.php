<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;



class LessonEight extends Controller
{
// Урок 8 Задача 1 Сделайте данную верстку макетом вашего сайта так, чтобы в тег main загружались представления действий контроллеров.
    public function lessonEight1()
    {

        return view('lessoneight.child',['main' => 'Здесь содержание контента тега main']);
      //  return view('lessoneight.lessonseight1',['main' => 12345]);

      //  return view('layouts.app',['main' => 12345]);

    }


}