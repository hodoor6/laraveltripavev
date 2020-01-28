<?php

namespace App\Http\Controllers;
use App\Model\Lesson30OrmAuthor;
use App\Model\Lesson30OrmMessage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class Lesson30OrmBook extends Controller
{
    //-другой Lesson30Book - ORM
//Урок 30. (laravel). Задача 1. Реализуйте гостевую книгу. Гостевая книга должна представлять собой страницу, на которую может зайти любой желающий и оставить свое сообщение.-Пусть по заходу на эту страницу выводится список всех оставленных ранее сообщений, отсортированных по убыванию даты. Пусть выводится текст сообщения, имя автора и дата создания сообщения.---Под сообщениями пусть расположена форма, в которой можно оставить сообщение. Пусть в форме будет инпут для ввода имени и текстареа для ввода сообщения.-После того, как форма будет отправлена, над списком сообщений выведите информационное сообщение о том, что сообщение пользователя успешно сохранено.

    public function bookAll(Request $request)
    {
        $text = '';
        if ($request -> has('start')) {
            $name = $request -> input('name');
            $text = $request -> input('text');
            if ($name != '' and $text != '') {
                $author = Lesson30OrmAuthor::where('name', $name) -> first();
                if ($author == null) {
                    $author = new Lesson30OrmAuthor(['name' => $name]);
                    $author -> save();
                }
                $message = new Lesson30OrmMessage(['text' => $text]);
                            /**/  $author -> message() -> save($message);
                $text = 'Сообщение успешно сохранено!';
            } else {
                $request -> session() -> flash('sms', 'Заполните все поля!');
                return redirect() -> back() -> withInput();
            }
        }


        $messages = Lesson30OrmMessage::with('Author') -> orderBy('date', 'desc') -> get();
        return view('Lesson30OrmBook.book.all', ['messages' => $messages, 'text' => $text]);
    }


}