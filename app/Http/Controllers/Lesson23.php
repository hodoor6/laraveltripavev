<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Lesson23 extends Controller
{

// Урок 23. (laravel). Задача 1. Сделайте таблицу products с продуктами и таблицу categories с категориями, которым принадлежат продукты. Добавьте записи в обе таблицы.
// Урок 23. (laravel). Задача 2. С помощью построителя запросов получите список всех продуктов вместе с их категориями.

    public function lesson23_2()
    {
        $users = DB::table('categories')
            ->Join('products','categories.id', '=' ,'products.id_category')
         ->select('categories.*','categories.id', 'products.count','products.salary')->get();
        var_dump($users);
    }


}

