<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class Lesson18 extends Controller
{

// Урок 18 Задача 1 Запишите в куки время захода пользователя на сайт. При следующем заходе выведите на экран сколько времени прошло от предыдущего захода пользователя на сайт.

    public function lesson18_1(Request $request)
    {
       if(!$request->cookie('name'))
       {
        return   response('Первый заход')->cookie('name', time(), 1000);
       }else{
           return date('H:i:s',(time ()- ($request->cookie('name'))));

}
}
}
