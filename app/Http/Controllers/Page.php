<?php

//Урок 3 Задача 1 Сделайте контроллер Page.

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class Page extends Controller
{

//Урок 3 Задача 2 В контроллере Page сделайте действие showOne. Сделайте так, чтобы данное действие было доступно по адресу /pages/show/. По обращению к данному действию выведите на экран какую-нибудь строку.

    public function showOne()
    {
        return 'showOne';
}

//Урок 3 Задача 3 В контроллере Page сделайте действие showAll. Сделайте так, чтобы данное действие было доступно по адресу /pages/all/. По обращению к данному действию выведите на экран какую-нибудь строку.

    public function showAll()
    {
        return 'showAll';
}

}