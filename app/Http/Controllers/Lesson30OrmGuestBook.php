<?php




namespace App\Http\Controllers;
use App\Model\Lesson30OrmAuthor;
use App\Model\Lesson30OrmMessage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class Lesson30OrmGuestBook extends Controller
{

//Урок 30. (laravel). Задача 1. Реализуйте гостевую книгу. Гостевая книга должна представлять собой страницу, на которую может зайти любой желающий и оставить свое сообщение.-Пусть по заходу на эту страницу выводится список всех оставленных ранее сообщений, отсортированных по убыванию даты. Пусть выводится текст сообщения, имя автора и дата создания сообщения.---Под сообщениями пусть расположена форма, в которой можно оставить сообщение. Пусть в форме будет инпут для ввода имени и текстареа для ввода сообщения.-После того, как форма будет отправлена, над списком сообщений выведите информационное сообщение о том, что сообщение пользователя успешно сохранено.



    public function lesson30_1(Request $request)
    {



        $authors = Lesson30OrmAuthor::with(['message' => function($query)
            {
                $query->orderBy('date', 'desc');
            }])->get();



        if ($request->has('submit')) {

            if ($request->has('name') and !empty($request->input('name')) and $request->has('message') and !empty($request->input('message'))) {

                $name = $request->input('name');


                $authorname = Lesson30OrmAuthor::where('name', $name)->value('name');

                if( $name == $authorname){
                    $authorId = Lesson30OrmAuthor::where('name', $name)->value('id');
} else{
                    $dbinsertAuthor = Lesson30OrmAuthor::create(['name' => $name]);

                    $authorId =  Lesson30OrmAuthor::where('name', $name)
                        ->value('id');

                }

                $dbinsertMessages = new Lesson30OrmMessage;
                $dbinsertMessages->text = $request->input('message');
                $dbinsertMessages->date = date('Ymdhis');
                $dbinsertMessages->author_id = $authorId;
                $dbinsertMessages->save();
//

                $request->session()->flash('status', 'Ваше сообщение успешно отправлено');
                $status = $request->session()->get('status');

                return redirect('/lessonorm30-1/')->with(['status' => $status]);

            } else {
                $status = 'Заполните все поля';
                return view('Lesson30OrmGuestBook.elem.dataform', ['authors' => $authors , 'status' => $status]);

            }


            return view('Lesson30OrmGuestBook.elem.dataform', ['authors' => $authors]);
        } else {


            return view('Lesson30OrmGuestBook.elem.dataform', ['authors' => $authors]);
        }


    }

}




