<?php

namespace App\Http\Controllers;
use App\Model\Lesson30OrmAuthor;
use App\Model\Lesson30OrmMessage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class Lesson30OrmBook extends Controller
{
    // - другая Lesson30GuestBook - ORM
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

// - другая Lesson30GuestBook - ORM
//Урок 30. (laravel). Задача 2.  Реализуйте модерирование сообщений гостевой книги. Пусть будет отдельная страница, на которой модератор видит список сообщений, а рядом с каждым сообщением - ссылку на удаление и ссылку на редактирование этого сообщения.


    public function bookAllmoder(Request $request)
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
                $author -> message() -> save($message);
                $text = 'Сообщение успешно сохранено!';
            } else {
                $request -> session() -> flash('sms', 'Заполните все поля!');
                return redirect() -> back() -> withInput();
            }
        }

        $messages = $this -> allMessage();
        return view('Lesson30OrmBook.book.author', ['messages' => $messages, 'text' => $text]);
    }



    public function bookAdmin()
    {
        $messages = $this -> allMessage();
        return view('Lesson30OrmBook.book.admin', ['messages' => $messages, 'text' => '']);
    }


    public function bookDelete(Request $request, $id)
    {
        $message = Lesson30OrmMessage::findOrFail($id);
        $message -> delete();
        $request -> session() -> flash('sms', 'Запись успешно удалена!');
        return redirect('book/admin');
    }


    public function bookUpdate(Request $request, $id)
    {
        $message = Lesson30OrmMessage::findOrFail($id);

         $request -> session() -> flash('name', $message -> author -> name);
        $request -> session() -> flash('text', $message -> text);
        if ($request -> has('start')) {
            $text = $request -> input('text');
            if ($text != '') {
                $message -> text = $text;
                $message -> save();
                $request -> session() -> flash('sms', 'Запись успешно изменена!');
                return redirect('book/admin');
            } else {
                $request -> session() -> flash('sms', 'Поле не должно быть пустым!');
            }
        }
        return view('Lesson30OrmBook.book.update');
    }
    private function allMessage()
    {
        return $messages = Lesson30OrmMessage::with('author') -> orderBy('date', 'desc') -> get();
    }

}