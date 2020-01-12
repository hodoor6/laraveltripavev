<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class Lesson20 extends Controller
{

// Урок 20. (laravel). Задача 1.Сделайте через PhpMyAdmin таблицу users с полями id, name (имя), surname (фамилия), age (возраст). Добавьте в эту таблицу 5 юзеров.

/// // Урок 20. (laravel). Задача 2. С помощью фасада DB получите всех юзеров, возраст которых более 18 лет. Передайте полученных юзеров в представление и выведите их в виде таблицы table.


public function lesson20_2()
{


    $users = DB::select('select * from users where age > ?',[18]);

    return view('lesson20.lesson20-2', ['users' => $users]);
}

//    }
//
//    if($request->isMethod('post'))
//        if ($request->hasFile('file'))
//        {
//           $data = $request->file('file')->move(__DIR__.'/text','test.txt');
//            //return view('lesson19.lesson19-2',['data'=>$data ]);
//
//           return redirect('/lesson19-2/show/')->withInput();
//        }
//
//    }


    }

