<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//Урок 32. (laravel). Задача 1. Пусть дана таблица users с колонками name и salary. Получите все записи.
//Модель LessonUser:

class Lesson32user extends Model
{

protected $fillable = ['name','salary'];

public $timestamps= 'false';

}
