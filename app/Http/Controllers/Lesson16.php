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



    // Урок 16 Задача 2 Сделайте два действия. В первом действии покажите пользователю форму, в которой будет 5 инпутов для ввода чисел. После отправки формы сохраните ее данные в флеш сообщение описанным способом и выполните редирект на второе действие. Во втором действии найдите сумму переданных чисел и выведите ее в представлении действия.

    public function lesson16_2( Request $request)
    {
        if ($request->has('number1') and !empty($request->number1)
            and $request->has('number2') and !empty($request->number2)
            and $request-> has('number3')  and !empty($request->number3)
            and $request->has('number4') and !empty($request->number4)
            and $request-> has('number5') and $request->number5 !='') {

            $request->flash();
       return redirect()->route('flash');

        }
        $result = 'Ведите  все  числа';
        return view('lesson16.lesson16-2', ['value' => $result]);

    }

    public function lesson16_2flash(Request $request)
    {
        $sum = $request->old ('number1') + $request->old ('number2')+ $request->old ('number3')+ $request->old ('number4')+ $request->old ('number5');

        return view('lesson16.lesson16-2flash', ['sum' => $sum]);
    }
}
