<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLesson34messages2Table extends Migration
{
    //Урок 34. (laravel). Задача 4. Сделайте заново миграцию с условиями: 1) создать таблицу messages; 2) добавить поле users_id; 3) переименовать таблицу в posts; 4) добавить столбец text после столбца id.

# php artisan make:migration create_lesson34messages2_table --create=lesson34messages2
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson34messages2', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('user_id');
        });

        Schema::rename('lesson34messages2', 'lesson34post');

        Schema::table('lesson34post', function (Blueprint $table) {
            $table->string('text')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lesson34messages2');
    }
}
