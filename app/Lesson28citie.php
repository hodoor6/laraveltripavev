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
    return $this->belongsTo('App\Lesson28user','id');
}

// Урок 28. (laravel). Задача 7. Сделайте еще таблицу countries (страны) с полями id, name (название страны). В таблицу cities добавьте поле country_id. Свяжите города со странами отношением belongsTo.

    public function lesson28countrie()
    {
        return $this->belongsTo('App\Lesson28countrie', 'country_id');
    }

// Урок 28. (laravel). Задача 9. Получите всех пользователей вместе с их городами и странами этих городов.


    public function country()
    {
        return $this->belongsTo('App\Lesson28countrie');
    }

//Урок 28. (laravel). Задача 12-1. Получите всех пользователей вместе с их странами
//вывод городов

    public function Lesson28citiehasManyThrough()
    {
        return $this->hasManyThrough('App\Lesson28user','App\Lesson28countrie','id', 'city_id');
    }
}

