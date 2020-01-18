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
  //  protected $dates = ['deleted_at'];
//
public function lesson28citie()
{
    return $this->belongsTo('App\Lesson28citie', 'id');
}


}

