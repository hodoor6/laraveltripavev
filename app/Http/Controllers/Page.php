<?php

//Урок 3 Задача 1 Сделайте контроллер Page.

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class Page extends Controller
{

//Урок 3 Задача 2 В контроллере Page сделайте действие showOne. Сделайте так, чтобы данное действие было доступно по адресу /pages/show/. По обращению к данному действию выведите на экран какую-нибудь строку.

//    public function showOne()
//    {
//        return 'showOne';
//}

//Урок 3 Задача 3 В контроллере Page сделайте действие showAll. Сделайте так, чтобы данное действие было доступно по адресу /pages/all/. По обращению к данному действию выведите на экран какую-нибудь строку.

    public function showAll()
    {
        return 'showAll';
    }


//Урок 3 Задача 4 Модифицируйте действие showOne контроллера Page. Сделайте так, чтобы данное действие было доступно по адресу /pages/show/:id/, где вместо :id будет какое-нибудь число. По обращению к данному действию выведите на экран переданное число.
//    public function showOne($params)
//    {
//        return $params;
//    }

//Урок 3 Задача 5 Модифицируйте предыдущую задачу так, чтобы на экран выводился квадрат переданного числа.
    public function showOne($params)
    {
        return pow($params, 2);
    }

//Урок 3 Задача 7 Сделайте в действии showOne следующий массив:
//	$pages = [
//		1 => 'страница 1',
//		2 => 'страница 2',
//		3 => 'страница 3',
//		4 => 'страница 4',
//		5 => 'страница 5',
//	]

///Урок 3 Задача 7 Выведите на экран элемент массива, номер которого соответствует переданному параметру. Если страницы с таким номером нет - выведите сообщение об этом.

    public function showOneSeven($params)
    {
        $pages = [
            1 => 'страница 1',
            2 => 'страница 2',
            3 => 'страница 3',
            4 => 'страница 4',
            5 => 'страница 5',
        ];

        if (array_key_exists($params, $pages)) {
            return $pages[$params];

        } else {
            return 'Такой страници не существует';
        }


    }

}