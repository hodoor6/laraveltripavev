<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Lesson30CategoriesAds extends Model
{
//Урок 30. (laravel). Задача 1.  Реализуйте доску объявлений.
//На главной странице нашего сайта должен быть список рубрик объявлений.
//По заходу на определенную рубрику должен выводится список объявлений из данной рубрики. Пусть объявления сортируются по убыванию даты. //Под списком объявлений сделайте форму, с помощью которой можно будет оставить новое объявление.
const CREATED_AT = 'date';
const UPDATED_AT = 'update';
protected $table = 'lesson30categoriesads';
    protected $fillable = ['category'];


//    protected $hidden = [
//        'password', 'remember_token',
//    ];
//
//
//    protected $casts = [
//        'email_verified_at' => 'datetime',
//    ];


    public function advertisement()
    {
        return $this->hasMany('App\Model\Lesson30Advertisement','category_id');
    }


}
