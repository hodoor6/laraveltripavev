<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson28countrie extends model
{
  //  use SoftDeletes;


public $timestamps = false;


// Урок 28. (laravel). Задача 7. Сделайте еще таблицу countries (страны) с полями id, name (название страны). В таблицу cities добавьте поле country_id. Свяжите города со странами отношением belongsTo.

 //   protected $fillable = ['title','desc','date','text','deleted_at'];
   protected $fillable = ['name'];
  //  protected $dates = ['deleted_at'];
//
public function lesson28countrie()
{
    return $this->belongsTo('App\Lesson28citie', 'id');
}
//--Урок 28. (laravel). Задача 10. Свяжите созданную вами таблицу countries с таблицей cities отношением hasMany.      --}}

public function Lesson28countrieMany()
{
    return $this->hasMany('App\Lesson28citie', 'country_id');
}
//--Урок 28. (laravel). Задача 12 Получите всех пользователей вместе с их странами.
    public function Lesson28countryManyThrough()
    {
        return $this->hasManyThrough('App\Lesson28user', 'App\Lesson28citie', 'country_id','city_id');
    }
//
}





