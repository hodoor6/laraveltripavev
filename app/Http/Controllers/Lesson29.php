<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Lesson29citie;
use App\Lesson29user;
use Illuminate\Http\Request;
use DB;
use App\User;
class Lesson29 extends Controller
{


    //     Урок 29. (laravel). Самостоятельно отработайте изученный материал.
    //Задача 1. Добавить нового пользователя и связанный с ним город (один к одному).
    //(пользователи) users: id, login, password
    //(города) cities: id, name, user_id

    public function lesson29_1()
    {
        $user = new Lesson29user(['login' => 'login8','password' => 'login6login8']);
        $city = new Lesson29citie(['name' => 'Италия','user_id' => '8']);

      $user->save();
      $user->lesson29citie()->save($city);

    }


    }





