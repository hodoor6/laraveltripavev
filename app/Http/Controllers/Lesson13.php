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
// Урок 13 Задача 2 Пусть у нас будет форма, имитирующая регистрацию пользователя на сайте. Спросите с помощью этой формы у пользователя его имя, фамилию, email, желаемый логин, желаемый пароль (инпут с типом password). После отправки формы выведите на экран в виде списка ul все отправленные поля, кроме поля с паролем и email. Решите задачу сначала через except, а затем через only.

    public function lesson13_2 (Request $request)
    {

        if ($request->isMethod('post'))  {

        if ($request->has('name')  and  !empty($request->name) and $request->has('surmame') and  !empty($request->surmame)  and $request->has('email') and  !empty($request->email)  and $request->has('login') and  !empty($request->login)  and $request->has('password') and  !empty($request->password) ) {
            $data = $request->only(['name','surmame','login','name']);
            $except = $request->except('password','email','_token');



            return view('lesson13.lesson13-2',['data'=>$data,'except'=>$except]);

        } else{
    $result = 'нет переданых чисел для вычесления суммы';
    return view('lesson13.lesson13-2', ['result' => $result]);
}

}   else{
    return view('lesson13.lesson13-2');
}
    }




// Урок 13 Задача 3 Самостоятельно попробуйте получить данные из формы, передав при этом два параметра в ваш маршрут.

    public function lesson13_3 (Request $request, $id,$page)
    {

        if ($request->isMethod('post'))  {

        if ($request->has('name')  and  !empty($request->name) and $request->has('surmame') and  !empty($request->surmame)  and $request->has('email') and  !empty($request->email)  and $request->has('login') and  !empty($request->login)  and $request->has('password') and  !empty($request->password) ) {
            $data = $request->only(['name','surmame','login','name']);
            $except = $request->except('password','email','_token');



            return view('lesson13.lesson13-3',['data'=>$data, 'id'=>$id ,'page'=>$page]);

        } else{
    $result = 'нет переданых чисел для вычесления суммы';
    return view('lesson13.lesson13-3', ['result' => $result,'id'=>$id, 'page'=>$page]);
}

}   else{
    return view('lesson13.lesson13-3',['id'=>$id, 'page'=>$page]);
}
    }

/// // Урок 13 Задача 4  Сделайте так, чтобы у вас было действие, которое будет срабатывать по следующему адресу: /test/method/. Перейдите по указанному адресу, но с GET параметром, например, так: /test/method?param=1. Решите все задачи ниже для данного адреса с GET параметром.

    public function lesson13_4 (Request $request)
    {


        if ($request->has('param')  and  !empty($request->param) ) {
            $param = $request->param;
            return view('lesson13.lesson13-4',['param'=>$param]);

        } else{
    $result = 'нет переданого параметра';
    return view('lesson13.lesson13-4', ['result' => $result]);
}


    return view('lesson13.lesson13-4');

 }


    /// // Урок 13 Задача 5  Для указанного адреса выведите результат метода path.
    public function lesson13_5 (Request $request)
    {


        if ($request->has('param')  and  !empty($request->param) ) {
            $param = $request->param;
            $path = $request->path();
            return view('lesson13.lesson13-5',['param'=>$param,'path'=>$path]);

        } else{
            $result = 'нет переданого параметра';
            return view('lesson13.lesson13-5', ['result' => $result]);
        }


        return view('lesson13.lesson13-5');

    }



    /// // Урок 13 Задача 6  Для указанного адреса выведите результат метода url.
    public function lesson13_6 (Request $request)
    {


        if ($request->has('param')  and  !empty($request->param) ) {
            $param = $request->param;
            $url = $request->url();
            return view('lesson13.lesson13-6',['param'=>$param,'url'=>$url]);

        } else{
            $result = 'нет переданого параметра';
            return view('lesson13.lesson13-6', ['result' => $result]);
        }


        return view('lesson13.lesson13-6');

    }


    /// // Урок 13 Задача 7  Для указанного адреса выведите результат метода fullUrl.
    public function lesson13_7 (Request $request)
    {


        if ($request->has('param')  and  !empty($request->param) ) {
            $param = $request->param;
            $fullUrl = $request->fullUrl();
            return view('lesson13.lesson13-7',['param'=>$param,'fullUrl'=>$fullUrl]);

        } else{
            $result = 'нет переданого параметра';
            return view('lesson13.lesson13-7', ['result' => $result]);
        }


        return view('lesson13.lesson13-7');

    }



// Урок 13 Задача 8  С помощью метода fullUrlWithQuery добавьте к запрошенному URL GET параметр page со значением 1.
    public function lesson13_8 (Request $request)
    {


        if ($request->has('param')  and  !empty($request->param) ) {
            $param = $request->param;
            $fullUrlWithQuery = $request->fullUrlWithQuery( ['page'=>'1']);
            return view('lesson13.lesson13-8',['param'=>$param,'fullUrlWithQuery'=>$fullUrlWithQuery]);

        } else{
            $result = 'нет переданого параметра';
            return view('lesson13.lesson13-8', ['result' => $result]);
        }


        return view('lesson13.lesson13-8');

    }



}

