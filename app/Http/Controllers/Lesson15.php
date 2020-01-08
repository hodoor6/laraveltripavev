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
        if ($request->has('number1')) {
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





// Урок 15 Задача 2   Спросите у пользователя email с помощью формы. Если этот email корректный, то выполните редирект на другое действие и выведите в представлении этого действия переданный email и сообщение о том, что он корректен.
//
//Если же email не корректный, снова покажите форму, показав над ней сообщение о некорректности ввода.

    public function lesson15_2(Request $request)
    {
        $result = '';
        if ($request->has('email')) {
            $email = $request->input('email');
            if (preg_match('#^[0-9a-zA-Z-.]+@[a-z]+\.[a-z]{2,3}$#', $email)) {
                return redirect('lesson15-2/result/')->withInput();
            } else {
                $result = 'Email некорректный!';
                return view('lesson15.lesson15-2', ['value' => $result]);
            }
        }

        return view('lesson15.lesson15-2', ['value' => $result]);
    }

    public function lesson15_2result(Request $request)
    {
        $email = $request->old('email');

        $result = 'Email некорректный';
        return view('lesson15.lesson15-2result', ['value' => $result, 'email' => $email]);

    }


// Урок 15 Задача 3  Сделайте именованный маршрут. Выполните на него редирект с другого действия.

    public function lesson15_3(Request $request)
    {
        return redirect()->route('result');
    }

    public function lesson15_3result(Request $request)
    {

        $result = 'Переданный верный параметр';
        return view('lesson15.lesson15-3result', ['value' => $result]);

    }

}
