<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson28user extends model
{
  //  use SoftDeletes;


public $timestamps = false;

// Урок 28. (laravel). Задача 1. Пусть у вас есть таблица users (пользователи) с полями id, login, password и таблица profiles (профили) с полями id, name (имя), surname (фамилия), email и user_id. Свяжите эти таблицы отношением hasOne.

 //   protected $fillable = ['title','desc','date','text','deleted_at'];
  //  protected $dates = ['deleted_at'];

public function lesson28profile()
{
    return $this->hasOne('App\Lesson28profile','user_id','id');
}

}

