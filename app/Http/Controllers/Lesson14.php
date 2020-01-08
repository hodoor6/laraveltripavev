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

    /// Урок 14 Задача 5  Пусть в переменной сессии записан массив с числами. Используя метод push добавьте к этому массиву еще одно число.

    public function lesson14_5(Request $request)
    {
            $request->session()->put('arr', ['1', '2', '3']);
            $request->session()->push('arr', '4');
            $value = $request->session()->get('arr');

        return view('lesson14.lesson14-5',['value' =>$value ]);

    }

    /// Урок 14 Задача 6  Удалите какую-нибудь переменную из сессии.

    public function lesson14_6(Request $request)
    {
            $request->session()->put('arr1', ['1', '2', '3']);
       $request->session()->forget('arr1');
        $value = $request->session()->get('arr1');

        return view('lesson14.lesson14-6',['value' =>$value]);

    }

    /// Урок 14 Задача 7 Удалите какую-нибудь переменную из сессии.

    public function lesson14_7(Request $request)
    {
            $request->session()->put('arr2', '1');

    }

    public function lesson14_7delete(Request $request)
    {

    $delete = $request->session()->pull('arr2');

    return view('lesson14.lesson14-7delete',['delete' =>$delete]);

    }


    /// Урок 14 Задача 8  Очистите вашу сессию от заданных переменных.

    public function lesson14_8(Request $request)
    {
        $request->session()->put('arr2', '1');
        $add = $request->session()->get('arr2', '1');
        var_dump($add);
        $flush = $request->session()->flush('arr2');
        var_dump($flush);

    }
    /// Урок 14 Задача 9  Установите несколько переменных сессии. Получите эти установленные переменные в виде массива.

    public function lesson14_9(Request $request)
    {
        $request->session()->put('arr2', ['22',22222,'2222']);
        $add = $request->session()->get('arr2');
        $request->session()->put('arr3', [12345,$add]);
        $data = $request->session()->all();

        return view('lesson14.lesson14-9',['data1' =>$data]);
    }

       // Урок 14 Задача 10  Проверьте, существует ли в сессии переменная test. Если существует - выведите на экран ее значение, а если не существует - установите ее значение в текущий момент времени.

    public function lesson14_10(Request $request)
    {

        if($request->session()->has('test' )){
            $request->session()->put('test', date("H:i:s d-m-Y"));
            $value = $request->session()->get('test');
            var_dump( $value);
            return view('lesson14.lesson14-10',['data10' =>$value]);

        }
        else
        {
            $request->session()->put('test', date('H:i:s d-m-'));

        }

    }




}