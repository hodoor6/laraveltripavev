<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLesson34messagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */    //Урок 34. (laravel). Задача 1. Создать миграцию для таблицы messages.

    /*php artisan make:migration create_lesson34messages_table --create=lesson34messages*/

//Урок 34. (laravel). Задача 2. Добавить столбцы 'text' и 'user_id'  ,description. Выполнить миграцию.
//php artisan migrate

    public function up()
    {
        Schema::create('lesson34messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('text', 100);
            $table->text('description');
            $table->integer('User_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lesson34messages');
    }
}
