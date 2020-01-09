<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Lesson16 extends Controller

{

// Урок 16 Задача 1 Сделайте два действия. В первом действии запишите флеш сообщение. При заходе на второе действие выведите это сообщение в представлении.

    public function lesson16_1(Request $request)
    {

        $request->session()->flash('status','Задание выполнено успешно!');
        return redirect()->route('flash');
    }

    public function lesson16_1flash(Request $request)
    {

       $result = $request->session()->get('status');

        return view('lesson16.lesson16-1', ['value' => $result]);
    }
}
