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


    public function lesson13_2 (Request $request)
    {

        if ($request->isMethod('post'))  {

        if ($request->has('name')  and  !empty($request->name) and $request->has('surmame') and  !empty($request->surmame)  and $request->has('email') and  !empty($request->email)  and $request->has('login') and  !empty($request->login)  and $request->has('password') and  !empty($request->password) ) {
            $data = $request->only(['name','surmame','login','name']);
            $except = $request->except('password','email');



            return view('lesson13.lesson13-2',['data'=>$data,'except'=>$except]);

        } else{
    $result = 'нет переданых чисел для вычесления суммы';
    return view('lesson13.lesson13-2', ['result' => $result]);
}

}   else{
    return view('lesson13.lesson13-2');
}
    }


}

