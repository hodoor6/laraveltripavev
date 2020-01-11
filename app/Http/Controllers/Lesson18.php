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

          response('Первый заход')->cookie('name', time(), 1000);
       }else{
           return date('H:i:s',(time ()- ($request->cookie('name'))));

}
}

// Урок 18 Задача 2 С помощью формы спросите у пользователя дату рождения. Запишите ее в куки. При заходе на сайт, если сегодня День Рождения пользователя, поздравьте его с этим праздником.


    public function lesson18_2(Request $request)
    {

           if (!$request -> cookie('birthdayuser2')) {

                   if ($request->has('birthday') and !empty($request->birthday)){
                       return response('Благодорим что заполнили нашу форму')->cookie('birthdayuser2', $request->birthday, 1000);

                   }

                   return view('lesson18.lesson18-2');
               }  else{

              $birthdayUser = $request->cookie('birthdayuser2');
               if(date('Y-m-d') == $birthdayUser){
                   echo 'Сегодня у Вас день рождение';
               }else{
                   echo 'Сегодня у нет дня рождения';
               }
}

}

// Урок 18 Задача 3 Сделайте счетчик обновления страницы, работающий через куки.

public function lesson18_3(Request $request)
{
    if (!$request -> cookie('couter')) {

           return response('первый заход пользователя')->cookie('couter', 1, 1440);
    }  else{
     $counter ='Количество обновленый страницы ' . ($request->cookie('couter') +1);
        return response()->view('lesson18.lesson18-3',['counter'=>$counter])->cookie('couter', ($request->cookie('couter') +1), 1440);

    }

}
}