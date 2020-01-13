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

// Урок 25. (laravel). Задача 3 Используя модель Post, созданную в предыдущем уроке для таблицы posts, получите в действии getAll массив всех статей, передайте его в представление и выведите циклом на экран в виде HTML таблицы с колонками id, title (заголовок) и desc (то есть без текста статьи).

    public function lesson25_3getAll()
{
    $posts = lesson24::all();

    return view('lesson25.lesson25-3', ['posts' => $posts]);

}

// Урок 25. (laravel). Задача 4 В контроллере PostController сделайте действие getOne для получения одной статьи по ее id. Пусть это действие будет доступно по адресу /post/:id/, где :id представляет собой id желаемой записи.

    public function lesson25_4getOne($id)
    {
    $post = lesson24::find($id);

    return view('lesson25.lesson25-4', ['post' => $post]);


}
// Урок 25. (laravel). Задача 5 В действии getOne из таблицы posts получите статью соответствующую переданному параметру. Передайте полученную статью в представление и выведите ее на экран, оформив соответствующим HTML кодом.

    public function lesson25_5getOne($id)
    {
    $post = lesson24::find($id);

    return view('lesson25.lesson25-5', ['post' => $post]);

}
}






