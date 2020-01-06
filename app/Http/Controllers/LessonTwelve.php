<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class LessonTwelve extends Controller

{

// Урок 12 Задача 1 Сделайте два действия. В представлении первого действия покажите форму, которая будет отправляться на второе действие методом POST. Выведите данные, отправленные через форму, в представлении второго действия.


    public function lessonTwelve1form ()
    {

        return view('lessontwelve.lessontwelve1form');

    }

    public function lessonTwelve1result (Request $request)
    {
        $result = '';
        if ($request->has('number1')  and  !empty($request->number1) and $request->has('number2')and  !empty($request->number2) and $request->has('number3') and   !empty($request->number3) ) {
            $number1 = ($request->number1);
            $number2 = ($request->number2);
            $number3 = ($request->number3);

            return view('lessontwelve.lessontwelve1result',['number1'=>$number1,'number2'=>$number2,'number3'=>$number3]);

        } else
            $result = 'нет переданых чисел';
        return view('lessontwelve.lessontwelve1result', ['result' => $result]);
    }



    // Урок 12 Задача 2  Выведите на экран метод HTTP запроса.
    public function lessonTwelve2form ()
    {


        return view('lessontwelve.lessontwelve2');
    }

// Урок 12 Задача 2  Выведите на экран метод HTTP запроса.
public function lessonTwelve2result (Request $request)
    {

    $result = '';
    if ($request->has('number1')  and  !empty($request->number1) and $request->has('number2') and  !empty($request->number2) and $request->has('number3') and   !empty($request->number3) ) {
        var_dump($method = $request->method());
        $number1 = ($request->number1);
        $number2 = ($request->number2);
        $number3 = ($request->number3);

        return view('lessontwelve.lessontwelve2result',['number1'=>$number1,'number2'=>$number2,'number3'=>$number3, 'method'=>'var_dump($method = $request->method())'] );

    } else
        $result = 'нет переданых чисел';
    return view('lessontwelve.lessontwelve2result', ['result' => $result]);

    }


    // Урок 12 Задача 3 Если метод HTTP запроса - GET, то выведите на экран сообщение '!', а если POST, то сообщение '!!'.
    public function lessonTwelve3form ()
    {
        return view('lessontwelve.lessontwelve3');
    }

    // Урок 12 Задача 3 Если метод HTTP запроса - GET, то выведите на экран сообщение '!', а если POST, то сообщение '!!'.
    public function lessonTwelve3result (Request $request)
    {

        $result = '';
        if ($request->has('number1')  and  !empty($request->number1) and $request->has('number2') and  !empty($request->number2) and $request->has('number3') and   !empty($request->number3) ) {
            if ($request->isMethod('post')) {
                $method = '! POST';
            }else {
               $method =  '!! GET';
            }
            $number1 = ($request->number1);
            $number2 = ($request->number2);
            $number3 = ($request->number3);

            return view('lessontwelve.lessontwelve3result',['number1'=>$number1,'number2'=>$number2,'number3'=>$number3, 'method'=>$method] );

        } else
            $result = 'нет переданых чисел';
        return view('lessontwelve.lessontwelve3result', ['result' => $result]);

    }
}

