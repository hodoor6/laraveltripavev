<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class lesson24 extends model
{
    use SoftDeletes;
// Урок 24. (laravel). Задача 1.Сделайте через PhpMyAdmin таблицу posts (статьи) с полями id, title (заголовок), desc (короткое описание статьи), text (текст статьи), date (дата публикации). Добавьте в эту таблицу 5 статей.
// Урок 24. (laravel). Задача 2. Сделайте модель Eloquent для таблицы posts из предыдущей задачи.

protected $table = 'posts';
public $timestamps = false;
protected $dateFormat = 'U';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    protected $fillable = ['title','desc','date','text','deleted_at'];
    protected $dates = ['deleted_at'];



}

