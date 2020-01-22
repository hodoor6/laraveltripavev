<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class cities29 extends model
{
    //  use SoftDeletes;


    public $timestamps = false;


    //Урок 29. (laravel). Задача 9. "Установите у какого-нибудь объекта модели внешний ключ (foreign key)."

    public function user()
    {
        return $this->hasOne('App\user29', 'id');
    }

}

