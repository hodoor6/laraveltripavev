<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
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

    $user = lesson28user::find(1);
    dump($user);

    dump($user->lesson28profile);


    }
    }

