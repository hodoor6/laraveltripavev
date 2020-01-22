<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Lesson30GuestBook extends Controller
{
    public function lesson30_1(Request $request)
    {
//Урок 30. (laravel). Задача 1. Реализуйте гостевую книгу. Гостевая книга должна представлять собой страницу, на которую может зайти любой желающий и оставить свое сообщение.-Пусть по заходу на эту страницу выводится список всех оставленных ранее сообщений, отсортированных по убыванию даты. Пусть выводится текст сообщения, имя автора и дата создания сообщения.---Под сообщениями пусть расположена форма, в которой можно оставить сообщение. Пусть в форме будет инпут для ввода имени и текстареа для ввода сообщения.-После того, как форма будет отправлена, над списком сообщений выведите информационное сообщение о том, что сообщение пользователя успешно сохранено.

        $dbselect = DB::select('SELECT * FROM lesson30guestbook WHERE id >= :id ORDER BY date DESC', ['id' => 1]);


        if ($request->has('submit')) {

            if ($request->has('name') and !empty($request->input('name')) and $request->has('massage') and !empty($request->input('massage'))) {


                $name = $request->input('name');
                $massage = $request->input('massage');
                $date = date('Ymdhis');

                $dbinsert = DB::insert('INSERT  INTO lesson30guestbook (name,massage, date ) VALUES (?, ?, ?)', [$name, $massage, $date]);


                $request->session()->flash('status', 'Ваше сообщение успешно отправлено');
                $status = $request->session()->get('status');

                return redirect('/lesson30-1/')->with(['status' => $status]);

            } else {
                $status = 'Заполните все поля';
                return view('Lesson30GuestBook.elem.dataform', ['alldata' => $dbselect , 'status' => $status]);

            }


            return view('Lesson30GuestBook.elem.dataform', ['alldata' => $dbselect]);
        } else {


            return view('Lesson30GuestBook.elem.dataform', ['alldata' => $dbselect]);
        }


    }


//Урок 30. (laravel). Задача 2.  Реализуйте модерирование сообщений гостевой книги. Пусть будет отдельная страница, на которой модератор видит список сообщений, а рядом с каждым сообщением - ссылку на удаление и ссылку на редактирование этого сообщения.


    public function lesson30_2moderator(Request $request)
    {

        $dbselect = DB::select('SELECT * FROM lesson30guestbook WHERE id >= :id ORDER BY date DESC', ['id' => 1]);

        return view('Lesson30GuestBook.elem.moderator', ['alldata' => $dbselect]);

    }


    public function lesson30_2edit(Request $request, $id)
    {

        if ($request->has('submit')) {

            if ($request->has('name') and !empty($request->input('name')) and $request->has('massage')
                and !empty($request->input('massage'))
                    and $request->has('date')
                    and !empty($request->input('date')
                    )) {


            $request->session()->flash('status', 'Cообщение обновлено');

            $status = $request->session()->get('status');

            $name = $request->input('name');
            $massage = $request->input('massage');
            $date = $request->input('date');


            $updateMassage = DB::update("UPDATE lesson30guestbook SET
 name = '$name',
  massage = '$massage' , 
  date = '$date'
   WHERE id = $id ");


            return redirect('/lesson30-2/moderator')->with(['status' => $status]);
        }else {
                $dbselect = DB::select('SELECT * FROM lesson30guestbook WHERE id = :id', ['id' => $id]);
            $status = 'Заполните все поля';
            return view('Lesson30GuestBook.elem.editform', ['dbselect' => $dbselect, 'status' => $status]);
        }

        } else {
            $dbselect = DB::select('SELECT * FROM lesson30guestbook WHERE id = :id', ['id' => $id]);

            return view('Lesson30GuestBook.elem.editform', ['dbselect' => $dbselect]);
        }

    }

    public function lesson30_2delete(Request $request, $id)
    {

        $request->session()->flash('status', 'Cообщение удаленно');

        $status = $request->session()->get('status');

        $deletedMassage = DB::delete('delete from lesson30guestbook WHERE id = :id ', ['id' => $id]);
        return redirect('/lesson30-2/moderator')->with(['status' => $status]);

    }
}




