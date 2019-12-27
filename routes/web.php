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
//2 Урок Задача 8 Сделайте маршрут вида /user/:id/, где вместо :id должно быть число. Добавьте проверку параметра регулярным выражением.
Route::get('/user8/{id}/', function ($id) {

    return $id; })->where('id', '[0-9]+');

//2 Урок Задача 9 Сделайте маршрут вида /user/:id/:name, где вместо :id должно быть число, а вместо :name - строка, состоящая из маленьких латинских букв количеством более 2-х. Добавьте проверку параметров регулярными выражениями.

Route::get('/user9/{id}/{name}/', function ($id,$name) {

    return $id.' ' .$name;})->where(['id' => '[0-9]+' , 'name' => '[a-z]{3,}']);

//2 Урок Задача 10 Сделайте маршрут вида /articles/:date/, где вместо :date должна быть дата в формате год-месяц-день. Добавьте проверку параметра регулярным выражением.

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

//Урок 3 Задача 2 В контроллере Page сделайте действие showOne. Сделайте так, чтобы данное действие было доступно по адресу /pages/show/. По обращению к данному действию выведите на экран какую-нибудь строку.

Route::get('/pages2/show/','Page@showOne');

//Урок 3 Задача 3 В контроллере Page сделайте действие showAll. Сделайте так, чтобы данное действие было доступно по адресу /pages/all/. По обращению к данному действию выведите на экран какую-нибудь строку.

Route::get('/pages3/all/','Page@showall');


//Урок 3 Задача 4 Модифицируйте действие showOne контроллера Page. Сделайте так, чтобы данное действие было доступно по адресу /pages/show/:id/, где вместо :id будет какое-нибудь число. По обращению к данному действию выведите на экран переданное число.

Route::get('/pages4/show/{params}','Page@showOne');

//Урок 3 Задача 5 Модифицируйте предыдущую задачу так, чтобы на экран выводился квадрат переданного числа.

Route::get('/pages5/show/{params}','Page@showOne');

//Урок 3 Задача 6 Модифицируйте ваш маршрут так, чтобы выполнялась проверка параметра регулярным выражением.

Route::get('/pages6/show/{params}','Page@showOne')->where('params', '[0-9]');

///Урок 3 Задача 7 Выведите на экран элемент массива, номер которого соответствует переданному параметру. Если страницы с таким номером нет - выведите сообщение об этом.
Route::get('/pages7/show/{params}','Page@showOneSeven')->where('params', '[0-9]');

///Урок 3 Задача 8 Создайте контроллер Test, а в нем действие sum. Сделайте так, чтобы данное действие было доступно по адресу /test/sum/:num1/:num2/, где где вместо :num1 и :num2 будут какие-нибудь числа. Пусть по обращению к данному действию на экран выводится сумма переданных чисел.

Route::get('/test8/sum/{num1}/{num2}/','Test@sum');

///Урок 3 Задача 9 Модифицируйте ваш маршрут так, чтобы выполнялась проверка параметров регулярными выражениями.

Route::get('/test9/sum/{num1}/{num2}/','Test@sum')->where(['num1'=> '[0-9]+','num2', '[0-9]+']);


///Урок 3 Задача 11 В контроллере Employee сделайте действие showOne. Параметром оно должно принимать номер работника в массиве $this->employees и выводить на экран строку с именем, фамилией и зарплатой работника.

Route::get('/employees11/{id}/','Employee@showOne')->where('num1','[0-9]+');


//Урок 3 Задачи 12 В контроллере Employee сделайте действие showField. Параметрами оно должно принимать номер работника в массиве $this->employees и название одного из полей ('name', 'surname' или 'salary'). Действие выводить на экран значение соответствующего поля соответствующего работника.

Route::get('/employees12/{id}/{name}/','Employee@showField')->where('id','[0-9]+');

//Урок 3 Задачи 13 Добавьте проверку регулярными выражениями всех параметров для маршрутов контроллера Employee.

Route::get('/employees13/{id}/{name}/','Employee@showField')->where(['id'=>'[1-5]+','name'=>'|name|surname|salary']);


// Урок 4. Задача 1 Сделайте представление для какого-нибудь действия одного из ваших контроллеров.

Route::get('/lessonfour1/','LessonFour@lessonFourOne');

// Урок 4. Задача 2 Пусть в действии контроллера даны переменные $name (имя), $surname (фамилия). Передайте значения этих переменных в представление и выведите содержимое каждой из этих переменных на экран.

Route::get('/lessonfour2/','LessonFour@lessonFourTwo');

//Урок 4. Задача 3 Перенесите ваше представление в соответствующую папку.


Route::get('/lessonfour3/','LessonFour@lessonFourThree');

// Урок 5. Задача 1 Пусть в действии контроллера даны переменные $name (имя), $age (возраст) и $salary (зарплата). Передайте значения этих переменных в представление и выведите содержимое каждой из этих переменных в отдельном абзаце.

Route::get('/lessonfive1/','LessonFive@lessonFiveOne');

// Урок 5. Задача 2 Пусть в действии дана переменная, содержащая CSS класс. Передайте эту переменную в представление и для какого-нибудь тега значением атрибута class укажите нашу переменную.

Route::get('/lessonfive2/','LessonFive@lessonFiveTwo');

// Урок 5. Задача 3 Пусть в представлении даны 3 инпута. Передайте из действия в представление 3 переменные, значения которых запишите в атрибуты value наших инпутов. переменную.

Route::get('/lessonfive3/','LessonFive@lessonFive3');

//Урок 5. Задача 4 Пусть в представлении дан абзац. Передайте из действия в представление переменную, содержащую CSS код, задающий красный цвет текста. С помощью атрибута style покрасьте наш абзац в красный цвет.

Route::get('/lessonfive4/','LessonFive@lessonFive4');

//Урок 5. Задача 5 Задача Пусть в действии дана переменная $text, содержащая текст ссылки, и переменная $href, содержащая адрес ссылки. Передайте эти переменные в представление и сформируйте с их помощью HTML ссылку.

Route::get('/lessonfive5/','LessonFive@lessonFive5');

//Урок 5. Задача 6 Выведите в представлении текущую дату в формате день.месяц.год.

Route::get('/lessonfive6/','LessonFive@lessonFive6');
