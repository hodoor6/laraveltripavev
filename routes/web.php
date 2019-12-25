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

//Урок 2. (laravel) Задача 4. Пусть дан адрес вида /user/:name/, где вместо :name может быть любая строка. Сделайте так, чтобы при обращении на адрес такого вида в браузер выводилась строка 'имя юзера :name', где вместо :name будет переданная строка.
Route::get('/user/{name}/', function ($name) {
    return 'Имя пользователя: '.$name;
});

//Урок 2. Задача 5. Пусть дан адрес вида /sum/:num1/:num2/, где вместо :num1 и :num2 могут быть любые числа. Сделайте так, чтобы при обращении на адрес такого вида в браузер выводилось сумма переданных чисел.
Route::get('/sum/{num1}/{num2}/', function ($num1, $num2) {
    return 'Сумма: '.($num1 + $num2);
});

//Урок 2. Задача 6. Пусть дан адрес вида /user/show-:id/, где вместо :id может быть любое число. Сделайте так, чтобы при обращении на адрес такого вида в браузер выводилось содержимое переданного параметра.
Route::get('/user/show-{id}/', function ($id) {
    return $id;
});

//Урок 2. (laravel). Задача 7. Пусть дан адрес вида /user/:id/, где вместо :id может быть любое число. Сделайте так, чтобы параметр id был не обязательный и, если он не передан, вместо него будет передаваться 0.
Route::get('/user/{id?}/', function ($id = 0) {
    return $id;
});

//1 Урок Задача 8 Сделайте маршрут вида /user/:id/, где вместо :id должно быть число. Добавьте проверку параметра регулярным выражением.
Route::get('/user8/{id}/', function ($id) {

    return $id; })->where('id', '[0-9]+');

//1 Урок Задача 9 Сделайте маршрут вида /user/:id/:name, где вместо :id должно быть число, а вместо :name - строка, состоящая из маленьких латинских букв количеством более 2-х. Добавьте проверку параметров регулярными выражениями.

Route::get('/user9/{id}/{name}/', function ($id,$name) {

return $id.' ' .$name;})->where(['id' => '[0-9]+' , 'name' => '[a-z]{3,}']);

//1 Урок Задача 10 Сделайте маршрут вида /articles/:date/, где вместо :date должна быть дата в формате год-месяц-день. Добавьте проверку параметра регулярным выражением.

Route::get('/articles/{date}/', function ($date) {

    return $date;})->where('date' ,'(\d{4})-(|0\d|1[012])-([0-2]\d|3[01])');


//2 Урок Задача 11 Сделайте маршрут вида /users/:order/, где вместо :order должно быть одно из значений: 'name', 'surname' или 'age'. Добавьте проверку параметра регулярным выражением.


Route::get('/users11/{order}/', function ($order) {

    return $order;})->where('order', '|name|age|surname' );

//Урок 2 Задача 12. Сделайте маршрут вида /:year/:month/:day/, где вместо :year должен быть год, вместо :month - месяц, вместо :day - день. Выведите на экран день недели, соответствующий этой дате. Добавьте проверку параметров регулярными выражениями.
Route::get('/{year}/{month}/{day}/', function ($year, $month, $day) {
    $week = ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'];
    return $week[date('w', mktime(0, 0, 0, $month, $day, $year))]; }) -> where
(['year' => '([0-9]{4})',
    'month' => '(0[1-9]|1[012])',
    'day' => '(0[1-9]|1[0-9]|2[0-9]|3[01])'
]);