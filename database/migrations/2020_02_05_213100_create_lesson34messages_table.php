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


    public function up()
    {
        Schema::create('lesson34messages', function (Blueprint $table) {
            $table->bigIncrements('id');
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
