<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;




class Lesson29product extends model
{
  //  use SoftDeletes;


public $timestamps = false;

 //   protected $fillable = ['title','desc','date','text','deleted_at'];
  //  protected $dates = ['deleted_at'];
//


//Урок 29. (laravel). Задача 3. Присоединить продукт с id = 6 к категории с id = 2. (многие ко многим).


    public function lesson29categorieBelongsToMany()
    {
        return $this -> belongsToMany('App\Lesson29categorie', 'lesson29categorie_lesson29product', 'id_prod', 'id_cat');
    }
    }



