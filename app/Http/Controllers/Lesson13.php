<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class Lesson13 extends Controller

{

// Урок 13 Задача 1 Пусть в вашей форме есть произвольное количество инпутов. После отправки формы получите массив отправленных значений, отправьте его в представление и выведите эти данные в виде списка ul.

    public function lesson13_1 (Request $request)
    {

        if ($request->isMethod('post'))  {

        if ($request->has('number1')  and  !empty($request->number1) and $request->has('number2') and  !empty($request->number2) ) {
            $data = $request->all();


            return view('lesson13.lesson13-1',['data'=>$data]);

        } else{
    $result = 'нет переданых чисел для вычесления суммы';
    return view('lesson13.lesson13-1', ['result' => $result]);
}

}   else{
    return view('lesson13.lesson13-1');
}
    }


}

