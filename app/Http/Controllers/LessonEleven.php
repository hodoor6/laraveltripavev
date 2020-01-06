<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class LessonEleven extends Controller

{

// Урок 11 Задача 1 Сделайте форму с инпутом, принимающим своим значением число. После отправки формы выведите через var_dump квадрат этого числа.

public function lessonEleven1(Request $request)
{
      var_dump(pow($request->input('number'),2));
     return view('lessoneleven.lessoneleven1form');

}

// Урок 11 Задача 2 Модифицируйте предыдущую задачу так, чтобы квадрат переданного числа выводился в представлении над формой.

public function lessonEleven2 (Request $request)
{
    if($request->has('number') and !empty($request->number)){
     $result = ($request->number ** 2);
    }else
        $result = '';

     return view('lessoneleven.lessoneleven2form',['result'=>$result]);

}

// Урок 11 Задача 3 Сделайте форму с двумя инпутами, в которые будут вводится числа. После отправки формы выведите на экран сумму этих чисел, а форму уберите.

public function lessonEleven3 (Request $request)
{

        if($request->has('number1') and !empty($request->number1) and $request->has('number2') and !empty($request->number2)){
     $result = ($request->number1 + $request->number2);
    }else
        $result = '';

    return view('lessoneleven.lessoneleven3form',['result'=>$result]);

}



}