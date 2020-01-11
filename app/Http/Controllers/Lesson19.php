<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class Lesson19 extends Controller
{

// Урок 19. (laravel). Задача 1. Сделайте форму для загрузки файлов. Загрузите с ее помощью какой-нибудь текстовый файл. После загрузки выведите на экран текст загруженного файла.

    public function lesson19_1(Request $request)
    {


       if($request->isMethod('get'))
       {
           return view('lesson19.lesson19-1');

       }else{
                if ($request->hasFile('file'))
           {
               $data = $request->file('file')->get();
                return view('lesson19.lesson19-1',['data'=>$data ]);
           }

}
}
}

