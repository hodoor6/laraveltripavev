<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Lesson30myCity extends Model
{
//Урок 30. (laravel). Задача 4.   Реализуйте сайт про города и страны.
//На главной странице сайта должен быть список стран. Каждая страна должна представлять собой ссылку. При переходе по этой ссылке должен открыться список городов данной страны.
//Каждый город также должен представлять собой ссылку. При переходе по этой ссылке должен открыться список достопримечательностей данного города, также в виде ссылок. Каждая из этих ссылок должна вести на страницу с описанием достопримечательности.

    public $timestamps = false;

protected $table = 'lesson30mycities';
    protected $fillable = ['city'];

//    protected $hidden = [
//        'password', 'remember_token',
//    ];
//
//
//    protected $casts = [
//        'email_verified_at' => 'datetime',
//    ];


    public function showplaces()
    {
        return $this->hasMany('App\Model\Lesson30myShowplace','city_id');
    }

}
