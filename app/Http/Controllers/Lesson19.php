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


// Урок 19. (laravel). Задача 2. Сделайте форму для загрузки файлов. Загрузите с ее помощью какой-нибудь текстовый файл. После загрузки выведите на экран текст загруженного файла.


public function lesson19_2(Request $request)
{


    if($request->isMethod('get'))
    {
        return view('lesson19.lesson19-2');

    }

    if($request->isMethod('post'))
        if ($request->hasFile('file'))
        {
           $data = $request->file('file')->move(__DIR__.'/text','test.txt');
            //return view('lesson19.lesson19-2',['data'=>$data ]);

           return redirect('/lesson19-2/show/')->withInput();
        }

    }


    public function lesson19_2show(Request $request)
    {
        $data = file_get_contents(__DIR__.'/text/test.txt');

        return view('lesson19.lesson19-2show',['data'=>$data ]);
    }

}