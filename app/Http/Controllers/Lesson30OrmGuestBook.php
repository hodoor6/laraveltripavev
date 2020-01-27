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



        $authors = Lesson30OrmMessage::with('Author' )-> orderBy('date', 'desc')
            ->get();



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

    //Lesson30GuestBook - ORM
//Урок 30. (laravel). Задача 2.  Реализуйте модерирование сообщений гостевой книги. Пусть будет отдельная страница, на которой модератор видит список сообщений, а рядом с каждым сообщением - ссылку на удаление и ссылку на редактирование этого сообщения.


    public function lesson30_2moderator(Request $request)
    {

        $authors = Lesson30OrmAuthor::with(['message' => function($query)
        {
            $query->orderBy('date', 'desc');
        }])->get();

        return view('Lesson30OrmGuestBook.elem.moderator', ['authors' => $authors]);

    }


    public function lesson30_2edit(Request $request, $id,$author_id)
    {

        if ($request->has('submit')) {

            if ($request->has('name') and !empty($request->input('name'))
                and $request->has('message') and !empty($request->input('message'))
                and $request->has('date') and !empty($request->input('date')
                )) {


            $request->session()->flash('status', 'Cообщение обновлено');

            $status = $request->session()->get('status');

                $updateAuthorsMessage = Lesson30OrmAuthor::find($author_id);
                $updateAuthorsMessage->name = $request->input('name');
                $updateAuthorsMessage->save();


                $message = $request->input('message');
                $date = $request->input('date');

                $updateMessage = Lesson30OrmMessage::
                where('id', $id)
                ->update(['text' => $message ,'date' => $date]);

            return redirect('/lessonorm30-2/moderator')->with(['status' => $status]);
        }else {
                $dbSelectAuthor = Lesson30OrmAuthor::find($author_id);
                $dbSelectMessage = Lesson30OrmMessage::find($id);

                $status = 'Заполните все поля';

                return view('Lesson30OrmGuestBook.elem.editform', ['dbSelectMessage' => $dbSelectMessage,'dbSelectAuthor' => $dbSelectAuthor, 'status' => $status]);
            }
        } else {

            $dbSelectAuthor = Lesson30OrmAuthor::find($author_id);
          $dbSelectMessage = Lesson30OrmMessage::find($id);

            return view('Lesson30OrmGuestBook.elem.editform', ['dbSelectMessage' => $dbSelectMessage,'dbSelectAuthor' => $dbSelectAuthor]);
        }
    }

    public function lesson30_2delete(Request $request, $id)
    {
        $request->session()->flash('status', 'Cообщение удаленно');

        $status = $request->session()->get('status');

        $deletedMassage = Lesson30OrmMessage::destroy($id);

       return redirect('/lessonorm30-2/moderator')->with(['status' => $status]);

    }
}




