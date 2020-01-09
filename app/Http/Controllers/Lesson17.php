<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class Lesson17 extends Controller
{

// Урок 17 Задача 7 Если вам нужен доступ к методам класса Response, но вы хотите возвращать шаблон в качестве содержимого отклика, то вы можете использовать метод view:

    public function lesson17_1()
    {
     //   return (new Response('Hello World', 200))->header('Content-Type', 'text/plain');

        $test = response('Hello World',200)->header('Content-Type', 'text/plain');
//        return response('Hello World', 200)->withHeaders([
//            'Content-Type' => 'text/plain',
//            'X-Header-One' => 'Header Value',
//            'X-Header-Two' => 'Header Value'
//        ]);

      return  response()->view('lesson17.lesson17-1',['test'=>$test])->header('Content-Type', 'text/plain');
   }
}
