<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;



class LessonNine extends Controller
{
// Урок 8 Задача 1 Сделайте данную верстку макетом вашего сайта так, чтобы в тег main загружались представления действий контроллеров.
    public function lessonNine1()
    {

        $links = [
            [
                'text' => 'text1',
                'href' => 'href1',
            ],
            [
                'text' => 'text2',
                'href' => 'href2',
            ],
            [
                'text' => 'text3',
                'href' => 'href3',
            ],
        ];

        return view('lessonnine.lessonnine1',['main' => $links]);


    }




}