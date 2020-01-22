<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class user29 extends model
{
  //  use SoftDeletes;


public $timestamps = false;



   protected $fillable = ['name','user_id'];
  //  protected $dates = ['deleted_at'];



    //Урок 29. (laravel). Задача 9. "Установите у какого-нибудь объекта модели внешний ключ (foreign key)."

    public function cities()
    {
        return $this->belongsTo('App\cities29','citys_id', 'id');
    }

}

