<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLesson34messages2Table extends Migration
{
//Урок 35. (laravel). Задача 6. Изменить тип колонки message из text в varchar с длиной 40.

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lesson34post', function (Blueprint $table) {

                $table -> renameColumn('text', 'message');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lesson34post', function (Blueprint $table) {
            $table->string('name', 100);
        });
    }
}
