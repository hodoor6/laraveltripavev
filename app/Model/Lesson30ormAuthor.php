<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Lesson30OrmAuthor extends Model
{
    public $timestamps = false;
protected $table = 'lesson30ormauthors';
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

public function message()
{
   return $this->hasMany('App\Model\Lesson30OrmMessage', 'author_id');
}


}
