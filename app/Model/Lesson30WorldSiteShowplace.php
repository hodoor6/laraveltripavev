<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Lesson30WorldSiteShowplace extends Model
{
//Урок 30. (laravel). Задача 4.   Реализуйте сайт про города и страны.
//На главной странице сайта должен быть список стран. Каждая страна должна представлять собой ссылку. При переходе по этой ссылке должен открыться список городов данной страны.
//Каждый город также должен представлять собой ссылку. При переходе по этой ссылке должен открыться список достопримечательностей данного города, также в виде ссылок. Каждая из этих ссылок должна вести на страницу с описанием достопримечательности.
    CONST CREATED_AT = 'date';
    CONST UPDATED_AT = 'update_at';
protected $table = 'lesson30worldsiteshowplaces';

    protected $fillable = ['title', 'text', 'city_id'];


//    protected $hidden = [
//        'password', 'remember_token',
//    ];
//
//
//    protected $casts = [
//        'email_verified_at' => 'datetime',
//    ];

    public function city()
    {
        return $this->belongsTo('App\Model\Lesson30WorldSiteCity');
    }

    public function country()
    {
        return $this->belongsTo('App\Model\Lesson30WorldSiteCountry','id','id','id');
    }

}
