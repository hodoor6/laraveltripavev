<?php

// Урок 25. (laravel). Задача 1. Сделайте контроллер PostController для работы со статьями.

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\lesson24;
class Lesson25 extends Controller
{

    // Урок 25. (laravel). Задача 2. В контроллере PostController сделайте действие getAll для получения списка всех статей. Пусть это действие будет доступно по адресу /post/all/.

    public function lesson25_2getAll()
    {
        $posts = lesson24::all();
        var_dump($posts);

    }
}





