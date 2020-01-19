<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson29user extends model
{
  //  use SoftDeletes;


public $timestamps = false;



    protected $fillable = ['login','password'];
  //  protected $dates = ['deleted_at'];


    //     Урок 29. (laravel). Самостоятельно отработайте изученный материал.
    //Задача 1. Добавить нового пользователя и связанный с ним город (один к одному).
//
public function lesson29citie()
{
    return $this->hasOne('App\Lesson29citie','user_id');
}


}

