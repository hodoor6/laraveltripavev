<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Lesson30Advertisement extends Model
{
//Урок 30. (laravel). Задача 1.  Реализуйте доску объявлений.
//На главной странице нашего сайта должен быть список рубрик объявлений.
//По заходу на определенную рубрику должен выводится список объявлений из данной рубрики. Пусть объявления сортируются по убыванию даты. //Под списком объявлений сделайте форму, с помощью которой можно будет оставить новое объявление.
const CREATED_AT = 'date';
const UPDATED_AT = 'update';
protected $table = 'lesson30advertisements';
    protected $fillable = ['category'];


//    protected $hidden = [
//        'password', 'remember_token',
//    ];
//
//
//    protected $casts = [
//        'email_verified_at' => 'datetime',
//    ];


    public function category()
    {
        return $this->belongsTo('App\Model\Lesson30CategoriesAds');
    }


}
