<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');


});
//Урок 2. (laravel). Задача 1. Сделайте маршрут вида /user/:id/, где вместо :id должно быть число. Добавьте проверку параметра регулярным выражением.
Route::get('/test/', function () {
    return '!';
});
//Урок 2. (laravel) Задача 2. Сделайте так, чтобы при обращении на адрес /dir/test/ в браузер выводилось сообщение '!!'.
Route::get('/dir/test/', function () {
    return '!!';
});

//Урок 2. (laravel) Задача 3. Пусть дан адрес вида /user/:id/, где вместо :id может быть любое число. Сделайте так, чтобы при обращении на адрес такого вида в браузер выводилось содержимое переданного параметра.
Route::get('/user/{id}/', function ($id) {
    return 'Параметр: '.$id;
});