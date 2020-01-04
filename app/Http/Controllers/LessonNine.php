<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;



class LessonNine extends Controller
{
// Урок 9 Задача 1  Сформируйте из нашего массива следующий HTML код:
//<a href="http://href1">text1</a>
//<a href="http://href2">text2</a>
//<a href="http://href3">text3</a>
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
// Урок 9 Задача 2  Модифицируйте предыдущую задачу так, чтобы каждая ссылка выводилась в отдельном теге li тега ul.

    public function lessonNine2()
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

        return view('lessonnine.lessonnine2',['main' => $links]);



}

// Урок 9 Задача 2  Модифицируйте предыдущую задачу так, чтобы каждая ссылка выводилась в отдельном теге li тега ul.

    public function lessonNine3()
    {

        $employees = [
            [
                'name' => 'user1',
                'surname' => 'surname1',
                'salary' => 1000,
            ],
            [
                'name' => 'user2',
                'surname' => 'surname2',
                'salary' => 2000,
            ],
            [
                'name' => 'user3',
                'surname' => 'surname3',
                'salary' => 3000,
            ],
            [
                'name' => 'user4',
                'surname' => 'surname4',
                'salary' => 4000,
            ],
            [
                'name' => 'user5',
                'surname' => 'surname5',
                'salary' => 5000,
            ],
        ];

        return view('lessonnine.lessonnine3',['employees' =>$employees]);



}


}