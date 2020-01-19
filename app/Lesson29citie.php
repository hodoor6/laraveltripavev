<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson29citie extends model
{
  //  use SoftDeletes;


public $timestamps = false;



   protected $fillable = ['name','user_id'];
  //  protected $dates = ['deleted_at'];


//Урок 30. (laravel). Задача 2. Добаавить новый комментарий (и получить ее модель) пользователя с id = 27. (один ко многим).

public function lesson29userhasMany (){
    return $this->hasMany('App\Lesson29user', 'id') ;
}


}

