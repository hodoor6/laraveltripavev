<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Lesson28citie;
use App\lesson28user;
use App\Lesson28profile;
use Illuminate\Http\Request;
use DB;

use App\User;
class Lesson28 extends Controller
{
//     Урок 28. (laravel). Задача 2. Получите какого-нибудь пользователя вместе с его профилем.
    public function lesson28_2()
    {

    $user = Lesson28user::find(1);
    dump($user);

    dump($user->lesson28profile);


    }

    //     Урок 28. (laravel). Задача 3. Задача //Получите всех пользователей вместе с их профилями, передайте полученный массив в представление и выведите на экран в виде HTML таблицы table.
    public function lesson28_3()
    {
        $users = Lesson28user::all();

return view('lesson28.lesson28-3',['users'=>$users]);

    }
    }





