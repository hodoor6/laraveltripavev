<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Lesson14 extends Controller

{

// Урок 14 Задача 1 В одном действии контроллера установите какое-нибудь значение в сессию, а во втором - получите его.

    public function lesson14_1put (Request $request)
    {
$request->session()->put('key','lesson14_1put');

 }


 public function lesson14_1show(Request $request)
    {
        var_dump(   $value = $request-> session()->get('key'));
            return view('lesson14.lesson14-1',['value' =>$value ]);

}
}