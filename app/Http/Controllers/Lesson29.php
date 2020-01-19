<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Lesson29citie;
use App\Lesson29product;
use App\Lesson29user;
use Illuminate\Http\Request;
use DB;
use App\User;
class Lesson29 extends Controller
{


    //     Урок 29. (laravel). Самостоятельно отработайте изученный материал.
    //Задача 1. Добавить нового пользователя и связанный с ним город (один к одному).
    //(пользователи) users: id, login, password
    //(города) cities: id, name, user_id

    public function lesson29_1()
    {
        $user = new Lesson29user(['login' => 'login8','password' => 'login6login8']);
        $city = new Lesson29citie(['name' => 'Италия','user_id' => '8']);

      $user->save();
      $user->lesson29citie()->save($city);

    }

//Урок 29. (laravel). Задача 2. Добавить новый город  (и получить его модель) пользователя с id = 5. (один ко многим).
//(комментарии) cities: id, name, user_id
//(пользователи) users: id, login, password

    public function lesson29_2()
    {
      $user =Lesson29user::find(5);

      $user->lesson29citie()->saveMany([

         new Lesson29citie(['name' => 'Норвегия']),
         new Lesson29citie(['name' => 'Германия'])
   ]);


 $user->lesson29citie()->create([

         'name' => 'Нидерланды'

   ]);


    }


//Урок 29. (laravel). Задача 3. Присоединить продукт с id = 6 к категории с id = 2. (многие ко многим).
//(продукты) products: id, name
//(категории) categories: id, name
//(таблица связи) prod_cat: id, prod_id, cat_id

    public function lesson29_3()
    {
      $user =Lesson29product::find(6);
      $user->lesson29categorieBelongsToMany()->attach(['cat_id'=>'2']);
     $user->lesson29categorieBelongsToMany()->attach(3);

    }

//Урок 29. (laravel). Задача 4. Отсоединить продукт с id = 6 к категории с id = 2. (многие ко многим).
//(продукты) products: id, name
//(категории) categories: id, name
//(таблица связи) prod_cat: id, prod_id, cat_id

    public function lesson29_4()
    {
      $user =Lesson29product::find(6);
//      $user->lesson29categorieBelongsToMany()->attach(['cat_id'=>'2']);
     $user->lesson29categorieBelongsToMany()->detach(3);

    }


    }





