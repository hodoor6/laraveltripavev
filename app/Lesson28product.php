<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;




class Lesson28product extends model
{
  //  use SoftDeletes;


public $timestamps = false;

 //   protected $fillable = ['title','desc','date','text','deleted_at'];
  //  protected $dates = ['deleted_at'];
//


// Урок 28. (laravel). Задача 13. Даны продукты и категории этих продуктов. Пусть продукт может принадлежать одновременно нескольким категориям. Свяжите продукты и категории отношением belongsToMany.




    public function cat()
    {
        return $this -> belongsToMany('App\Lesson28categorie', 'lesson28categorie_lesson28product', 'id_prod', 'id_cat');
    }



}

