<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Lesson15 extends Controller

{

// Урок 15 Задача 1  Сделайте действие с формой, в которой будет один инпут для ввода числа. Пусть форма отправляется на это же действие. Сделайте так, что если введено число от 1 до 10, то выполнится редирект на другое действие, представление которого выведет сообщение 'форма успешна отправлена'.
//
//Если же введено число не из разрешенного диапазона, снова покажите пользователю форму, написав над ней сообщение о том, что введено некорректное число.

    public function lesson15_1(Request $request)
    {
        $result = '';
        if ( $request->has('number1')) {
            $num = $request->input('number1');
            if ($num >= 1 and $num <= 10) {
                return redirect('lesson15-1/result/');
            } else {
                $result = 'введено некорректное число';
                return view('lesson15.lesson15-1', ['value' => $result]);

            }
        }

        return view('lesson15.lesson15-1', ['value' => $result]);
    }

    public function lesson15_1result(Request $request)
    {
        $result = 'форма успешна отправлена';
        return view('lesson15.lesson15-1result', ['value' => $result]);

    }
}
