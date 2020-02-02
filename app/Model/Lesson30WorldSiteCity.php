<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Lesson30WorldSiteCity extends Model
{
//Другой подход

//Урок 30. (laravel). Задача 5.  Реализуйте сайт про города и страны. -
//--Модифицируйте предыдущую задачу так, чтобы на сайте появилась админка, в которой можно будет добавлять страны, города этих стран, достопримечательности и их описание.-Реализуйте добавление, редактирование и удаление. --

    public $timestamps = false;
protected $table = 'lesson30worldsitecities';
    protected $fillable = ['city'];

//    protected $hidden = [
//        'password', 'remember_token',
//    ];
//
//
//    protected $casts = [
//        'email_verified_at' => 'datetime',
//    ];

//    public function country()
//    {
//        return $this->belongsTo('App\Model\Lesson30myCountry');
//    }

    public function showplaces()
    {
        return $this->hasMany('App\Model\Lesson30WorldSiteShowplace','city_id');
    }

}
