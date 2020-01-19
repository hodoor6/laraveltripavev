<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson29categorie extends model
{
  //  use SoftDeletes;



public $timestamps = false;

 //   protected $fillable = ['title','desc','date','text','deleted_at'];
  //  protected $dates = ['deleted_at'];
//


//Урок 29. (laravel). Задача 3. Присоединить продукт с id = 6 к категории с id = 2. (многие ко многим).

    public function lesson29productBelongsToMany()
    {
        return $this->belongsToMany('App\Lesson29product', 'lesson29categorie_lesson29product', 'cat_id', 'prod_id');

           }

           }
