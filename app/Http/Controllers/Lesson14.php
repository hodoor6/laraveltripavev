<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Lesson14 extends Controller

{

// Урок 14 Задача 1 В одном действии контроллера установите какое-нибудь значение в сессию, а во втором - получите его.

    public function lesson14_1put (Request $request)
    {
$request->session()->put('key','lesson14_1put');

 }


 public function lesson14_1show(Request $request)
    {
     $value = $request-> session()->get('key');
            return view('lesson14.lesson14-1',['value' =>$value ]);

}

// Урок 14 Задача 2 Используя сессии, выведите в каком-нибудь представлении счетчик, показывающий количество обновлений страницы.

 public function lesson14_2(Request $request)
    {
        if($request->session()->get('counter') !==null)
        {
            $value = $request->session()->get('counter') +1;
            $request->session()->put('counter', $value);
    }
        else {
            $value = 1;
            $request->session()->put('counter', $value);
        }

        return view('lesson14.lesson14-2',['value' =>$value ]);

}

/// Урок 14 Задача 3 Описанным выше способом реализуйте счетчик обновления страницы.

 public function lesson14_3(Request $request)
    {
        if($request->session()->get('counter') !==null)
        {
            $value = $request->session()->get('counter','1');
            $request->session()->put('counter', $value + 1);
            $value = $request->session()->get('counter');
        }
        else {
            $value = 1;
            $request->session()->put('counter', $value);
        }

        return view('lesson14.lesson14-3',['value' =>$value ]);

}


/// Урок 14 Задача 4 Запишите в сессию время первого захода пользователя на страницу. При обновлении страницы (и при первом заходе тоже) выводите это время на экран.

    public function lesson14_4(Request $request)
    {
        if($request->session()->get('time') ==null)
        {
            $request->session()->put('time', date('H:i:s d-m-Y'));
            $value = $request->session()->get('time');
        }
        else {
            $value = date('H:i:s d-m-Y');
            $request->session()->put('time', $value);
        }

        return view('lesson14.lesson14-4',['value' =>$value ]);

    }

}