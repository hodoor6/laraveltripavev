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
        if ($request->has('number1')  and  !empty($request->number1) and $request->has('number2')and  !empty($request->numbe2) and $request->has('number3') and   !empty($request->number3) ) {
            $number1 = ($request->number1);
            $number2 = ($request->number2);
            $number3 = ($request->number3);

            return view('lessontwelve.lessontwelve1result',['number1'=>$number1,'number2'=>$number2,'number3'=>$number3]);

        } else
            $result = 'нет переданых чисел';
        return view('lessontwelve.lessontwelve1result', ['result' => $result]);
    }


}

