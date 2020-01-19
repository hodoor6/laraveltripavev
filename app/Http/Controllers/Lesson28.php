<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Lesson28categorie;
use App\Lesson28categorie_lesson28product;
use App\Lesson28citie;
use App\Lesson28countrie;
use App\Lesson28product;
use App\lesson28user;
use App\Lesson28profile;
use Illuminate\Http\Request;
use DB;

use App\User;
class Lesson28 extends Controller
{
//     Урок 28. (laravel). Задача 2. Получите какого-нибудь пользователя вместе с его профилем.
    public function lesson28_2()
    {

    $user = Lesson28user::find(1);
    dump($user);

    dump($user->lesson28profile);


    }

    //     Урок 28. (laravel). Задача 3. Задача //Получите всех пользователей вместе с их профилями, передайте полученный массив в представление и выведите на экран в виде HTML таблицы table.
    public function lesson28_3()
    {
        $users = Lesson28user::all();

return view('lesson28.lesson28-3',['users'=>$users]);
    }
    //     Урок 28. (laravel). Задача 5. Получите какого-нибудь пользователя вместе с его городом.
    public function lesson28_5()
    {
        $user = Lesson28citie::findOrFAil(2);

        dump($user);

        dump($user->lesson28user);
    }

//Урок 28. (laravel). Задача 6.  Получите всех пользователей вместе с их городами, передайте полученный массив в представление и выведите на экран в виде HTML таблицы table.

public function lesson28_6()
{
    $users = Lesson28citie::all();

    return view('lesson28.lesson28-6',['users'=>$users]);


}


public function lesson28_8()
{
    $cities = Lesson28citie::all();

    return view('lesson28.lesson28-8',['cities'=>$cities]);

}
//Урок 28. (laravel). Задача 9. Получите всех пользователей вместе с их городами и странами этих городов.
    public function lesson28_9()
{

   $users = Lesson28user::all();
    return view('lesson28.lesson28-9',['cities'=>$users]);

}
//Урок 28. (laravel). Задача 9-1. Получите всех пользователей вместе с их городами и странами этих городов.
    public function lesson28_9_1()
{

   $users = Lesson28user::all();
    return view('lesson28.lesson28-9-1',['users'=>$users]);

}
//
/// /Урок 28. (laravel). //--Урок 28. (laravel). Задача 11. Получите все страны вместе с их городами.       --}}
    public function lesson28_11()
{
   $cityes = Lesson28countrie::all();

  return view('lesson28.lesson28-11',['cityes'=>$cityes]);

}

/// /Урок 28. (laravel). //--Урок 28. (laravel). Задача 11. Получите все страны вместе с их городами.       --}}
    public function lesson28_12()
    {
        $users = Lesson28countrie::all();



  return view('lesson28.lesson28-12',['users'=>$users]);

}


/// /Урок 28. (laravel). //--Урок 28. (laravel). Задача 12-1. Получите все страны вместе с их городами.       --}}
    public function lesson28_12_1()
{

        $users = Lesson28citie::all();


  return view('lesson28.lesson28-12-1',['users'=>$users]);

}


//// Урок 28. (laravel). Задача 13. Даны продукты и категории этих продуктов. Пусть продукт может принадлежать одновременно нескольким категориям. Свяжите продукты и категории отношением belongsToMany.
///
    public function lesson28_13()
    {

        $products = Lesson28product::all();

   return view('lesson28.lesson28-13',['products'=>$products]);






    }




    //// Урок 28. (laravel). Задача 14. Получите продукты вместе с их категориями.
///
    public function lesson28_14()
    {
       $products = Lesson28product::all();

           return view('lesson28.lesson28-14',['products'=>$products]);

   }

    //// Урок 28. (laravel). Задача 16. Самостоятельно опробуйте изученную теорию.
///
    public function lesson28_15()
    {
        $categories = Lesson28categorie::all();

               return view('lesson28.lesson28-15',['categories'=>$categories]);
        }


        //// Урок 28. (laravel). Задача 15. Получите категории вместе с продуктами, принадлежащими этим категориям.
///
    public function lesson28_16()
    {

        DB::listen(function($query) {
            var_dump($query->sql);
            echo '<br>';
        });
            $categories = Lesson28categorie::with('lesson28productRoles')->get();


            $categories = Lesson28categorie::with('lesson28productRoles')->where('name','выпечка')->get();

        $user = Lesson28citie::with('lesson28countrie')->get();

}

}



