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

    // Урок 26. (laravel). Задача 2. Сделайте какое-нибудь действие, по заходу на которое для статьи с id 1 поменяйте title и короткое описание desc.

    public function lesson26_2()
    {
    $post = lesson24::find(1);
    $post->title = 'Статья 1 заголовок изменен';
    $post->desc = 'Статья 1 Статья 1 Статья 1 Короткое описание изменено';
    $post->save();
        return  redirect('/lesson25-6/post/all/');
}
    // Урок 26. (laravel). Задача 3. Сделайте самостоятельно описанное мною редактирование статьи.

    public function lesson26_3edit(Request $request,$id)
    {

        $message = '';
        $post = lesson24::findOrFail($id);
        if($request->has('start'))
        {
            if ($request -> title != '' and $request -> desc != '' and $request -> text != '') {


        $post->title = $request->title;
        $post->desc = $request->desc;
        $post->date = $request->date;
        $post->text = $request->text;
        $post->save();


                $request->session()->flash('statusedit', 'Запись успешно обновлена!');
                $status = $request->session()->get('statusedit');

                $idPost =  $request -> session() -> flash('id', $post -> id);
                $idPost = $request->session()->get('id');

                $title =  $request -> session() -> flash('title', $post -> title);
                $title = $request->session()->get('title');

               return  redirect('/lesson26-4/post/all/')->with(['status' => $status ,'idPost' => $idPost, 'title' =>  $title]);
        }else
        {
            $message = 'Заполните все поля!';
            redirect() -> back() -> withInput();
        }
        }

        return view('lesson26.lesson26-3', ['message' => $message, 'post'=>$post]);
    }

// Урок 26. (laravel). Задача 4 Отредактируйте представление действия getAll так, чтобы появилась еще одна колонка со ссылкой на редактирование соответствующей статьи.

    public function lesson26_4getAll(Request $request,$order='date',$dir='desc')
    {
        $posts = lesson24::orderBy($order,$dir)->get();
        return view('lesson26.lesson26-4', ['posts' => $posts ]);
    }


    // Урок 26. (laravel). Задача 5. Модифицируйте код действия editPost так, чтобы после сохранения формы выполнялся редирект на список всех записей (то есть на действие getAll).

    public function lesson26_5edit(Request $request,$id)
    {

        $message = '';
        $post = lesson24::findOrFail($id);
        if($request->has('start'))
        {
            if ($request -> title != '' and $request -> desc != '' and $request -> text != '') {

                $post->title = $request->title;
                $post->desc = $request->desc;
                $post->date = $request->date;
                $post->text = $request->text;
                $post->save();

                return  redirect('/lesson26-4/post/all/');

            }else
            {
                $message = 'Заполните все поля!';
                redirect() -> back() -> withInput();
            }
        }

        return view('lesson26.lesson26-3', ['message' => $message, 'post'=>$post]);
    }


    // Урок 26. (laravel). Задача 6.Модифицируйте предыдущую задачу так, чтобы при редиректе отправлялось флеш сообщение об успешном обновлении записи. Выводите это сообщение в представлении действия getAll.

    public function lesson26_6edit(Request $request,$id)
    {

        $message = '';
        $post = lesson24::findOrFail($id);
        if($request->has('start'))
        {
            if ($request -> title != '' and $request -> desc != '' and $request -> text != '') {

                $post->title = $request->title;
                 $post->desc = $request->desc;
                $post->date = $request->date;
                $post->text = $request->text;
                $post->save();

                $request->session()->flash('status', 'Запись успешно обновлена!');
                $value = $request->session()->get('status');
                return  redirect('/lesson26-4/post/all/')->with('value', $value);
            }else
            {
                $message = 'Заполните все поля!';
                redirect() -> back() -> withInput();
            }
        }

        return view('lesson26.lesson26-3', ['message' => $message, 'post'=>$post]);
    }



    // Урок 26. (laravel). Задача 7. Модифицируйте предыдущую задачу так, чтобы во флеш сообщении был указан id и title статьи, подвергнувшейся изменению.

    public function lesson26_7edit(Request $request,$id)
    {

        $message = '';
        $post = lesson24::findOrFail($id);
        if($request->has('start'))
        {
            if ($request -> title != '' and $request -> desc != '' and $request -> text != '') {


                $post->title = $request->title;
                $post->desc = $request->desc;
                $post->date = $request->date;
                $post->text = $request->text;
                $post->save();


                $request->session()->flash('statusedit', 'Запись успешно обновлена!');
                $status = $request->session()->get('statusedit');

                $idPost =  $request -> session() -> flash('id', $post -> id);
                $idPost = $request->session()->get('id');

                $title =  $request -> session() -> flash('title', $post -> title);
                $title = $request->session()->get('title');

                return  redirect('/lesson26-4/post/all/')->with(['status' => $status ,'idPost' => $idPost, 'title' =>  $title]);
            }else
            {
                $message = 'Заполните все поля!';
                redirect() -> back() -> withInput();
            }
        }

        return view('lesson26.lesson26-3', ['message' => $message, 'post'=>$post]);
    }


// Урок 26. (laravel). Задача 8. Массовые изменения //Самостоятельно опробуйте изученную теорию.

    public function lesson26_8($id)
    {

        $post = lesson24::where('id','>=','13')
->update(['title' =>'статья новая', 'desc' =>'описание'.$id]);

        return  redirect('/lesson26-4/post/all/');

}


//Урок 26 Задача 9://"Создайте модель с помощью массового заполнения firstOrCreate()."
//// Метод firstOrCreate() пытается найти запись БД, используя указанные пары столбец/значение. Если модель не найдена в БД, запись будет вставлена в БД с указанными атрибутами.
    public function lesson26_9($id)
    {

        $post = lesson24::firstOrCreate(['title'=>'Статья'.$id,'desc' => 'описание cтатьи' . $id, 'text' => 'описание cтатьи'.$id,'date' => date('Y-m-d', time()) ]);


      return  redirect('/lesson26-4/post/all/');

}



//Урок 26 Задача 10 "Создайте модель с помощью массового заполнения firstOrCreate()."
//// Метод firstOrCreate() пытается найти запись БД, используя указанные пары столбец/значение. Если модель не найдена в БД, запись будет вставлена в БД с указанными атрибутами.
    public function lesson26_10($id)
    {

        $post = lesson24::firstOrNew(['title'=>'Статья'.$id,'desc' => 'описание cтатьи' . $id, 'text' => 'описание cтатьи'.$id,'date' => date('Y-m-d', time()) ]);
        $post->save();

      return  redirect('/lesson26-4/post/all/');

}

//Урок 26 Задача 10 "Задача 11: "Обновите существующую модель или создайте новую, если её пока нет, используя метод updateOrCreate()."Laravel предоставляет метод updateOrCreate(), когда надо обновить существующую модель или создать новую, если её пока нет, для выполнения этой задачи за один шаг. Подобно методу firstOrCreate(), метод updateOrCreate() сохраняет модель, поэтому не надо вызывать метод PHPsave().
    public function lesson26_11($id)
    {
        $post = lesson24::updateOrCreate(['id'=>$id ] ,['title'=>'Статья '. $id , 'desc' => 'Описание cтатьи ' . $id, 'text' => 'Статья '.$id.' Статья '.$id.' Статья '.$id.' Статья '.$id.' Статья '.$id.' Статья '.$id,'date' => date('Y-m-d', time()) ]);

     return  redirect('/lesson26-4/post/all/');
}
}



