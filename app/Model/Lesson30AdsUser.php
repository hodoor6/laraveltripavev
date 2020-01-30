<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Lesson30AdsUser extends Model
{
    //  -другой Lesson30Ads - ORM
//Урок 30. (laravel). Задача 1.  Реализуйте доску объявлений.
//На главной странице нашего сайта должен быть список рубрик объявлений.
//По заходу на определенную рубрику должен выводится список объявлений из данной рубрики. Пусть объявления сортируются по убыванию даты. //Под списком объявлений сделайте форму, с помощью которой можно будет оставить новое объявление.

protected $table = 'lesson30adsusers';

    public $timestamps = false;
    protected $fillable = ['name','phone'];


//    protected $hidden = [
//        'password', 'remember_token',
//    ];
//
//
//    protected $casts = [
//        'email_verified_at' => 'datetime',
//    ];

    public function advertisementUser()
    {
        return $this->hasMany('App\Model\Lesson30AdsAdvertisement','user_id');
    }
}
