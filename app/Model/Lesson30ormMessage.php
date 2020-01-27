<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Lesson30OrmMessage extends Model
{

protected $table = 'lesson30ormmessages';
    protected $fillable = [
        'id', 'name',
    ];


//    protected $hidden = [
//        'password', 'remember_token',
//    ];
//
//
//    protected $casts = [
//        'email_verified_at' => 'datetime',
//    ];


    public function Author()
    {
        return $this->belongsTo('App\Model\Lesson30OrmAuthor','id');
    }


}
