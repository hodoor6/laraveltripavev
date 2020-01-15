<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\lesson24;
class Lesson27 extends Controller
{
    // Урок 27. (laravel). Задача 1. В контроллере PostController, созданном в предыдущих уроках, сделайте действие delPost для удаления статьи. Пусть это действие будет доступно по адресу /post/del/:id, где :id будет содержать id статьи для удаления.
    public function lesson27_1delPost($id)
    {
        $post = lesson24::destroy(25);

        $post->delete();



        return redirect('/lesson26-4/post/all/');
    }



    // Урок 27. (laravel). Задача 2.  Отредактируйте представление действия getAll так, чтобы появилась еще одна колонка со ссылкой на удаления соответствующей статьи.
    //После удаления выполняйте редирект обратно на список статей с флеш сообщением об успешном удалении статьи. Сообщение должно содержать title удаленной статьи.

    public function lesson27_2delPost(Request $request, $id)
    {
     $post = lesson24::findOrFail($id);
        $delete = $request->session()->flash('delete','Статья успешно удалена');
        $delete = $request->session()->get('delete');
       $request->session()->flash('title', $post->title);
        $title= $request->session()->get('title');
        $post->delete();
        $post = lesson24::destroy($id);
        return redirect('/lesson26-4/post/all/')->with(['delete'=>$delete,'title'=>$title]);


    }
}

