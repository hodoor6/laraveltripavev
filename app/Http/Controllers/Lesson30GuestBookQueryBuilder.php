<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Lesson30GuestBookQueryBuilder extends Controller
{
    public function lesson30_1(Request $request)
    {
       // QueryBuilder
//Урок 30. (laravel). Задача 1. Реализуйте гостевую книгу. Гостевая книга должна представлять собой страницу, на которую может зайти любой желающий и оставить свое сообщение.-Пусть по заходу на эту страницу выводится список всех оставленных ранее сообщений, отсортированных по убыванию даты. Пусть выводится текст сообщения, имя автора и дата создания сообщения.---Под сообщениями пусть расположена форма, в которой можно оставить сообщение. Пусть в форме будет инпут для ввода имени и текстареа для ввода сообщения.-После того, как форма будет отправлена, над списком сообщений выведите информационное сообщение о том, что сообщение пользователя успешно сохранено.

//        $dbselect = DB::select('SELECT * FROM lesson30guestbook WHERE id >= :id ORDER BY date DESC', ['id' => 1]);

      $dbselect = DB::table('lesson30guestbook')->where('id','>=','1')->latest('date')->get();


        if ($request->has('submit')) {

            if ($request->has('name') and !empty($request->input('name')) and $request->has('massage') and !empty($request->input('massage'))) {


                $name = $request->input('name');
                $massage = $request->input('massage');
                $date = date('Ymdhis');

                $dbinsert = DB::table('lesson30guestbook')->insertGetId(
                        ['name' => $name, 'massage' => $massage, 'date' => $date]
);


                $request->session()->flash('status', 'Ваше сообщение успешно отправлено');
                $status = $request->session()->get('status');

                return redirect('/lessonQueryBuilder30-1/')->with(['status' => $status]);

            } else {
                $status = 'Заполните все поля';
                return view('Lesson30GuestBookQueryBuilder.elem.dataform', ['alldata' => $dbselect , 'status' => $status]);

            }


            return view('Lesson30GuestBookQueryBuilder.elem.dataform', ['alldata' => $dbselect]);
        } else {


            return view('Lesson30GuestBookQueryBuilder..elem.dataform', ['alldata' => $dbselect]);
        }


    }


}




