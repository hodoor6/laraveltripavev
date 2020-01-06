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


}