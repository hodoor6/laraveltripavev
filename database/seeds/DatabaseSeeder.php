<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call('UserTableSeeder');
//        $this->call(UserTableSeeder::class);

        DB::table('lesson34post') -> insert(['message' => 'пользователь_1', 'user_id' => 1]);
        DB::table('lesson34post') -> insert(['message' => 'пользователь_2', 'user_id' => 2]);
        DB::table('lesson34post') -> insert(['message' => 'пользователь_3', 'user_id' => 3]);
        DB::table('lesson34post') -> insert(['message' => 'пользователь_4', 'user_id' => 4]);

        $this->command->info('Таблица пользователей загружена данными!');
    }
}
class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('lesson34post')->insert([
                ['message' => 'Cообщение 1' ,'user_id' => '1'],
                ['message' => 'Cообщение 2' ,'user_id' => '2'],
                ['message' => 'Cообщение 3' ,'user_id' => '3'],
                ['message' => 'Cообщение 3' ,'user_id' => '4']
        ]
        );
    }

    }
