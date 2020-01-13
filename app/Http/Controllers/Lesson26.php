<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\lesson24;
class Lesson26 extends Controller
{
    // Урок 26. (laravel). Задача 1. В контроллере PostController, созданном в предыдущем уроке, сделайте действие newPost для создания новой статьи. Пусть это действие будет доступно по адресу /post/new/. В представлении действия покажите форму для добавления новой записи. После отправки формы сохраните новую запись.
    public function lesson26_1newPost(Request $request)
    {
        $message = '';
        if ($request -> has('start')) {
            if ($request -> title != '' and $request -> desc != '' and $request -> text != '') {
           $postbd = new lesson24;
            $postbd->title = $request->title;
            $postbd->desc = $request->desc;
            $postbd->date = date('Y-m-d', time());
            $postbd->text = $request->text;
            $postbd->save();
          return  redirect('/lesson25-6/post/all/');
} else{
                          $message = 'Заполните все поля!';
                redirect() -> back() -> withInput();
            }
        }
        return view('lesson26.lesson26-1', ['message' => $message]);
              }
    }