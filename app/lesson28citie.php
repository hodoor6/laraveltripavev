<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson28citie extends model
{
  //  use SoftDeletes;


public $timestamps = false;


// Урок 28. (laravel). Задача 4. Пусть у вас есть таблица users (пользователи) с полями id, login, password, city_id и таблица cities (города) с полями id, name (название города). Свяжите пользователей с городами отношением belongsTo.

 //   protected $fillable = ['title','desc','date','text','deleted_at'];
  //  protected $dates = ['deleted_at'];
//
public function lesson28user()
{
    return $this->belongsTo('App\Lesson28user','id','city_id');
}

}

