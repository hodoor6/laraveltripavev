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
    return 'Параметр: ' . $id;
});

//Урок 2. (laravel) Задача 4. Пусть дан адрес вида /user/:name/, где вместо :name может быть любая строка. Сделайте так, чтобы при обращении на адрес такого вида в браузер выводилась строка 'имя юзера :name', где вместо :name будет переданная строка.
Route::get('/user/{name}/', function ($name) {
    return 'Имя пользователя: ' . $name;
});

//Урок 2. Задача 5. Пусть дан адрес вида /sum/:num1/:num2/, где вместо :num1 и :num2 могут быть любые числа. Сделайте так, чтобы при обращении на адрес такого вида в браузер выводилось сумма переданных чисел.
Route::get('/sum/{num1}/{num2}/', function ($num1, $num2) {
    return 'Сумма: ' . ($num1 + $num2);
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

    return $id;
})->where('id', '[0-9]+');

//2 Урок Задача 9 Сделайте маршрут вида /user/:id/:name, где вместо :id должно быть число, а вместо :name - строка, состоящая из маленьких латинских букв количеством более 2-х. Добавьте проверку параметров регулярными выражениями.

Route::get('/user9/{id}/{name}/', function ($id, $name) {

    return $id . ' ' . $name;
})->where(['id' => '[0-9]+', 'name' => '[a-z]{3,}']);

//2 Урок Задача 10 Сделайте маршрут вида /articles/:date/, где вместо :date должна быть дата в формате год-месяц-день. Добавьте проверку параметра регулярным выражением.

Route::get('/articles/{date}/', function ($date) {

    return $date;
})->where('date', '(\d{4})-(|0\d|1[012])-([0-2]\d|3[01])');

//2 Урок Задача 11 Сделайте маршрут вида /users/:order/, где вместо :order должно быть одно из значений: 'name', 'surname' или 'age'. Добавьте проверку параметра регулярным выражением.


Route::get('/users11/{order}/', function ($order) {

    return $order;
})->where('order', '|name|age|surname');

//Урок 2 Задача 12. Сделайте маршрут вида /:year/:month/:day/, где вместо :year должен быть год, вместо :month - месяц, вместо :day - день. Выведите на экран день недели, соответствующий этой дате. Добавьте проверку параметров регулярными выражениями.

Route::get('/lesson2-12/{year}/{month}/{day}/', function ($year, $month, $day) {
    $week = [1 =>'Понедельник',2 =>'Вторник',3 =>'Среда',4 =>'Четверг',5 =>'Пятница',6 =>'Суббота',7 =>'Воскресенье'];


      $day = date("N", (mktime(0,0,0,$month,$day, $year)));

  return $week[$day];

    })->where(['year' => '[0-9]{4}','month' => '[0-2]{2}', 'day'=>'[0-9]{2}']);

//todo доделать регулярку
//})->where
//(['year' => '([0-9]{4})',
//    'month' => '(0[1-9]|1[012])',
//    'day' => '(0[1-9]|1[0-9]|2[0-9]|3[01])'
//]);
//
////Урок 3 Задача 2 В контроллере Page сделайте действие showOne. Сделайте так, чтобы данное действие было доступно по адресу /pages/show/. По обращению к данному действию выведите на экран какую-нибудь строку.

Route::get('/pages2/show/', 'Page@showOne');

//Урок 3 Задача 3 В контроллере Page сделайте действие showAll. Сделайте так, чтобы данное действие было доступно по адресу /pages/all/. По обращению к данному действию выведите на экран какую-нибудь строку.

Route::get('/pages3/all/', 'Page@showall');


//Урок 3 Задача 4 Модифицируйте действие showOne контроллера Page. Сделайте так, чтобы данное действие было доступно по адресу /pages/show/:id/, где вместо :id будет какое-нибудь число. По обращению к данному действию выведите на экран переданное число.

Route::get('/pages4/show/{params}', 'Page@showOne');

//Урок 3 Задача 5 Модифицируйте предыдущую задачу так, чтобы на экран выводился квадрат переданного числа.

Route::get('/pages5/show/{params}', 'Page@showOne');

//Урок 3 Задача 6 Модифицируйте ваш маршрут так, чтобы выполнялась проверка параметра регулярным выражением.

Route::get('/pages6/show/{params}', 'Page@showOne')->where('params', '[0-9]');

///Урок 3 Задача 7 Выведите на экран элемент массива, номер которого соответствует переданному параметру. Если страницы с таким номером нет - выведите сообщение об этом.
Route::get('/pages7/show/{params}', 'Page@showOneSeven')->where('params', '[0-9]');

///Урок 3 Задача 8 Создайте контроллер Test, а в нем действие sum. Сделайте так, чтобы данное действие было доступно по адресу /test/sum/:num1/:num2/, где где вместо :num1 и :num2 будут какие-нибудь числа. Пусть по обращению к данному действию на экран выводится сумма переданных чисел.

Route::get('/test8/sum/{num1}/{num2}/', 'Test@sum');

///Урок 3 Задача 9 Модифицируйте ваш маршрут так, чтобы выполнялась проверка параметров регулярными выражениями.

Route::get('/test9/sum/{num1}/{num2}/', 'Test@sum')->where(['num1' => '[0-9]+', 'num2', '[0-9]+']);


///Урок 3 Задача 11 В контроллере Employee сделайте действие showOne. Параметром оно должно принимать номер работника в массиве $this->employees и выводить на экран строку с именем, фамилией и зарплатой работника.

Route::get('/employees11/{id}/', 'Employee@showOne')->where('num1', '[0-9]+');


//Урок 3 Задачи 12 В контроллере Employee сделайте действие showField. Параметрами оно должно принимать номер работника в массиве $this->employees и название одного из полей ('name', 'surname' или 'salary'). Действие выводить на экран значение соответствующего поля соответствующего работника.

Route::get('/employees12/{id}/{name}/', 'Employee@showField')->where('id', '[0-9]+');

//Урок 3 Задачи 13 Добавьте проверку регулярными выражениями всех параметров для маршрутов контроллера Employee.

Route::get('/employees13/{id}/{name}/', 'Employee@showField')->where(['id' => '[1-5]+', 'name' => '|name|surname|salary']);


// Урок 4. Задача 1 Сделайте представление для какого-нибудь действия одного из ваших контроллеров.

Route::get('/lessonfour1/', 'LessonFour@lessonFourOne');

// Урок 4. Задача 2 Пусть в действии контроллера даны переменные $name (имя), $surname (фамилия). Передайте значения этих переменных в представление и выведите содержимое каждой из этих переменных на экран.

Route::get('/lessonfour2/', 'LessonFour@lessonFourTwo');

//Урок 4. Задача 3 Перенесите ваше представление в соответствующую папку.


Route::get('/lessonfour3/', 'LessonFour@lessonFourThree');

// Урок 5. Задача 1 Пусть в действии контроллера даны переменные $name (имя), $age (возраст) и $salary (зарплата). Передайте значения этих переменных в представление и выведите содержимое каждой из этих переменных в отдельном абзаце.

Route::get('/lessonfive1/', 'LessonFive@lessonFiveOne');

// Урок 5. Задача 2 Пусть в действии дана переменная, содержащая CSS класс. Передайте эту переменную в представление и для какого-нибудь тега значением атрибута class укажите нашу переменную.

Route::get('/lessonfive2/', 'LessonFive@lessonFiveTwo');

// Урок 5. Задача 3 Пусть в представлении даны 3 инпута. Передайте из действия в представление 3 переменные, значения которых запишите в атрибуты value наших инпутов. переменную.

Route::get('/lessonfive3/', 'LessonFive@lessonFive3');

//Урок 5. Задача 4 Пусть в представлении дан абзац. Передайте из действия в представление переменную, содержащую CSS код, задающий красный цвет текста. С помощью атрибута style покрасьте наш абзац в красный цвет.

Route::get('/lessonfive4/', 'LessonFive@lessonFive4');

//Урок 5. Задача 5 Задача Пусть в действии дана переменная $text, содержащая текст ссылки, и переменная $href, содержащая адрес ссылки. Передайте эти переменные в представление и сформируйте с их помощью HTML ссылку.

Route::get('/lessonfive5/', 'LessonFive@lessonFive5');

//Урок 5. Задача 6 Выведите в представлении текущую дату в формате день.месяц.год.

Route::get('/lessonfive6/', 'LessonFive@lessonFive6');

//Урок 5. Задача 7 Пусть из действия в представление передаются данные работника в виде массива. Пусть в массиве будет ключ name (имя), ключ age (возраст) и ключ salary (зарплата). Выведите каждый элемент массива в отдельном абзаце.

Route::get('/lessonfive7/', 'LessonFive@lessonFive7');


//Урок 5. Задача 8 Передайте в представление какой-нибудь массив. Выведите на экран количество элементов в этом массиве.

Route::get('/lessonfive8/', 'LessonFive@lessonFive8');

//   Урок 5. Задача 9 Пусть из действия в представление передается переменная $city (город). Выведите в представлении названия города из этой переменной. Если же город не передан - пусть по умолчанию выведется город Москва.

Route::get('/lessonfive9/', 'LessonFive@lessonFive9');

//   Урок 5. Задача 10 Пусть из действия в представление передается массив $location (местоположение) с ключами country (страна), city (город). Выведите каждый элемент это массива в отдельном абзаце. Сделайте так, чтобы, если не задана страна, то по умолчанию вывелась Россия, а если не задан город, то по умолчанию вывелась Москва.

Route::get('/lessonfive10/', 'LessonFive@lessonFive10');

//Урок 5. Задача 11  Пусть из действия в представление передаются переменные $year (год), $month (месяц) и $day (день). Сделайте так, чтобы, если какая-либо из этих переменных не задана, то вместо нее выведется текущее значение (текущий год, месяц или день).

Route::get('/lessonfive11/', 'LessonFive@lessonFive11');

//Урок 5. Задача 12 Пусть в переменной $str хранится строка с тегами, например, '<b>строка</b>'. Выведите эту строку на экран так, чтобы теги выполнили свое действие (то есть чтобы в данном случае текст стал жирным).

Route::get('/lessonfive12/', 'LessonFive@lessonFive12');

//Урок 5 Задача 13 С помощью комментариев Blade закомментируйте какую-нибудь часть кода представления.

Route::get('/lessonfive13/', 'LessonFive@lessonFive13');

//Урок 5 Задача 14 Описанным способом выполните какой-нибудь PHP код.

Route::get('/lessonfive14/', 'LessonFive@lessonFive14');


//Урок 6 Задача 1 Пусть из действия в представление передается номер дня недели. Сделайте так, чтобы, если передан номер воскресенья, то на экран вывелся текст 'Воскресенье'. Пусть текст выводится в абзаце.

Route::get('/lessonsix1/', 'LessonSix@lessonSix1');

//Урок 6 Задача 2 Модифицируйте предыдущую задачу так, чтобы на экран выводилось названия дня недели в том случае, если сегодня выходной день (то есть или суббота или воскресенье). Для решения задачи напишите две директивы @if.


Route::get('/lessonsix2/', 'LessonSix@lessonSix2');

//Урок 6 Задача 3 Пусть из действия в представление передается номер дня недели. Сделайте так, чтобы, если номер дня недели соответствует выходному дню, то вывелось сообщение об этом, в противном случае выведите сообщение о том, что передан номер рабочего дня недели.

Route::get('/lessonsix3/', 'LessonSix@lessonSix3');

// Урок 6 Задача 4 Пусть из действия в представление передается номер месяца. С помощью директив @if и @elseif определите пору года, в которую попадает переданный месяц. Если переданный номер не соответствует ни одному месяцу - выведите сообщение об этом.


Route::get('/lessonsix4/', 'LessonSix@lessonSix4');

// Урок 6 Задача 5 Пусть из действия в представление передается возраст пользователя. Если возраст пользователь несовершеннолетний, то выведите сообщение об этом. Для решения задачи воспользуйтесь директивой @unless.

Route::get('/lessonsix5/', 'LessonSix@lessonSix5');

   // Урок 6 Задача 6 Пусть из действия в представление передается массив с числами. Если количество элементов в этом массиве больше нуля, то выведите на экран сумму этих элементов, а если количество элементов равно нулю, то выведите сообщение об этом.

Route::get('/lessonsix6/', 'LessonSix@lessonSix6');

//Урок 7 Задача 1 Передайте из действия в представление массив с числами. Выведите этот массив в виде списка ul.

Route::get('/lessonseven1/', 'LessonSeven@lessonSeven1');

//Урок 7 Задача 2 Модифицируйте предыдущую задачу так, чтобы в пункты списка выводились квадраты элементов массива.

Route::get('/lessonseven2/', 'LessonSeven@lessonSeven2');

// Урок 7 Задача 3 Модифицируйте предыдущую задачу так, чтобы в пункты списка выводились квадратные корни элементов массива.

Route::get('/lessonseven3/', 'LessonSeven@lessonSeven3');

//  Урок 7 Задача 4 Передайте из действия в представление массив со строками. Выведите этот массив в виде списка ul так, чтобы выводились и ключи, и значения элементов массива.

Route::get('/lessonseven4/', 'LessonSeven@lessonSeven4');

// Урок 7 Задача 5 Модифицируйте предыдущую задачу так, чтобы на выводе к ключу прибавлялась единица.

Route::get('/lessonseven5/', 'LessonSeven@lessonSeven5');

//  Урок 7 Задача 6 Передайте из действия в представление массив с числами. Выведите этот массив в виде списка ul. Сделайте так, чтобы в список попадали только элементы, значениями которых служат четные числа.

Route::get('/lessonseven6/', 'LessonSeven@lessonSeven6');

//  Урок 7 Задача 7 Из действия в представление передается переменная $data. Эта переменная может содержать массив с числами либо быть обычным числом. Если переменная $data - массив, то выведите элементы этого массива в виде списка ul, а если переменная $data - число, то выведите это число в абзаце.

Route::get('/lessonseven7/', 'LessonSeven@lessonSeven7');

// Урок 7 Задача 8  Передайте из действия в представление массив с числами от 1 до 25. Выведите его в виде таблицы 5 на 5.

Route::get('/lessonseven8/', 'LessonSeven@lessonSeven8');

// Урок 7 Задача 9 Передайте из действия в представление массив с работниками:

Route::get('/lessonseven9/', 'LessonSeven@lessonSeven9');


// Урок 7 Задача 10 Выведите массив из предыдущей задачи в виде таблицы table.

Route::get('/lessonseven10/', 'LessonSeven@lessonSeven10');

//Урок 7 Задача 11 Из действия в представление передается массив со строками. Выведите элементы этого массива в виде списка ul. Сделайте так, чтобы перед значением элемента, выводился еще и порядковый номер итерации, начиная с 0.

Route::get('/lessonseven11/', 'LessonSeven@lessonSeven11');

//Урок 7 Задача 12 Модифицируйте предыдущую задачу так, чтобы порядковый номер итерации начинался с 1.

Route::get('/lessonseven12/', 'LessonSeven@lessonSeven12');

//Урок 7 Задача 13 Модифицируйте предыдущую задачу так, чтобы для первой li добавлялся CSS класс first, а для последней - класс last.

Route::get('/lessonseven13/', 'LessonSeven@lessonSeven13');


//Урок 7 Задача 14 Из действия в представление передается массив с числами. Выведите каждый элемент этого массива в своем теге b. С помощью $loop->remaining три последних элемента массива выведите не в теге b, а в теге i.


Route::get('/lessonseven14/', 'LessonSeven@lessonSeven14');


//Урок 7 Задача 15 Самостоятельно попробуйте работу изученных директив.
Route::get('/lessonseven15/', 'LessonSeven@lessonSeven15');

// Урок 7 Задача 16 Самостоятельно попробуйте работу цикла @forelse.
Route::get('/lessonseven16/', 'LessonSeven@lessonSeven16');

// Урок 7 Задача 17 С помощью цикла $@for выведите 10 абзацев, заполненных числами от 1 до 10.
Route::get('/lessonseven17/', 'LessonSeven@lessonSeven17');

// Урок 8 Задача 1 Сделайте данную верстку макетом вашего сайта так, чтобы в тег main загружались представления действий контроллеров.
Route::get('/lessoneight1/', 'LessonEight@lessonEight1');


//Урок 8 Задача 2 Сделайте так, чтобы каждое действие отправляло в представление переменную $title, содержащую тайтл страницы. Модифицируйте код предыдущей задачи так, чтобы переданный тайтл попадал в тег title макета сайта.

Route::get('/lessoneight2/', 'LessonEight@lessonEight2');


//Урок 8 Задача 3 Сделайте так, чтобы каждое действие отправляло в представление переменную $aside, содержащую дополнительную часть сайдбара. Модифицируйте код предыдущей задачи так, чтобы переданные данные попадали в сайдбар сайта, не удаляя при этом его содержимое, а дописывая переданные данные в конец сайдбара.

Route::get('/lessoneight3/', 'LessonEight@lessonEight3');



// Урок 8 Задача 4 Вынесите хедер и футер сайта в отдельные подшаблоны. Разместите их в папке elems. Подключите их к основному макету.

Route::get('/lessoneight4/', 'LessonEight@lessonEight4');


// Урок 9 Задача 1  Сформируйте из нашего массива следующий HTML код:
//<a href="http://href1">text1</a>
//<a href="http://href2">text2</a>
//<a href="http://href3">text3</a>
//

Route::get('/lessonnine1/', 'LessonNine@lessonNine1');


// Урок 9 Задача 2  Модифицируйте предыдущую задачу так, чтобы каждая ссылка выводилась в отдельном теге li тега ul.


Route::get('/lessonnine2/', 'LessonNine@lessonNine2');

// Урок 9 Задача 3  Выведите этот массив в виде следующей таблицы:

Route::get('/lessonnine3/', 'LessonNine@lessonNine3');

// Урок 9 Задача 4  Модифицируйте предыдущую задачу так, чтобы в первом ряду появились заголовки таблицы:

Route::get('/lessonnine4/', 'LessonNine@lessonNine4');

// Урок 9 Задача 5  Модифицируйте предыдущую задачу так, чтобы появилась еще одна колонка в начале таблицы, в которой будут выводится порядковые номера работников (то есть ключи элементов массива). Нумерация должна начинаться с единицы, а не с нуля.

Route::get('/lessonnine5/', 'LessonNine@lessonNine5');

// Урок 9 Задача 6  Модифицируйте предыдущую задачу так, чтобы на экран выводились только работники с зарплатой более 2000.

Route::get('/lessonnine6/', 'LessonNine@lessonNine6');


// Урок 9 Задача 7  Модифицируйте предыдущую задачу так, чтобы на экран выводились только работники с зарплатой более 2000.

Route::get('/lessonnine7/', 'LessonNine@lessonNine7');

// Урок 9 Задача 8 Модифицируйте предыдущую задачу так, чтобы цвет текста tr с забаненным пользователем был красного цвета, а с активным пользователем - зеленого.

Route::get('/lessonnine8/', 'LessonNine@lessonNine8');


// Урок 9 Задача 9 Модифицируйте предыдущую задачу так, чтобы цвет текста tr с забаненным пользователем был красного цвета, а с активным пользователем - зеленого.

Route::get('/lessonnine9/', 'LessonNine@lessonNine9');


// Урок 9 Задача 10 Модифицируйте предыдущую задачу так, чтобы цвет текста tr с забаненным пользователем был красного цвета, а с активным пользователем - зеленого.

Route::get('/lessonnine10/', 'LessonNine@lessonNine10');


// Урок 9 Задача 11  Сделайте в действии контроллера массив с числами от 1 до последнего дня текущего месяца. Передайте этот массив в представление. Сделайте также переменную, в которой будет хранится номер текущего дня. Также передайте эту переменную в представление.
//
//Переберите циклом переданный массив и выведите его в виде списка ul. При этом тегу li, в котором хранится номер текущего дня месяца добавьте класс active.
Route::get('/lessonnine11/', 'LessonNine@lessonNine11');


// Урок 10 Задача 3-1 + 4-1

Route::get('/posts/{id}/', 'PostController@ShowOne')->where('id','[1-5]');

// Урок 10 Задача + 4-1
Route::get('/posts/{id}/', 'PostController@ShowOne1')->where('id','[0-9]+');

// Урок 10 Задача + 5-1
Route::get('/posts/', 'PostController@ShowAll');



// Урок 10 Задача 3 В контроллере Post сделайте действие showOne, маршрут к которому будет следующий: /posts/:id/, где :id будет представлять собой номер поста в массиве $this->posts. Данное действие должно будет выводить запрошенный пост (все поля, кроме короткого описания).

Route::get('/lessonten3/posts/{id}/', 'LessonTenPost@lessonTen3')->where('id','[1-5]');


//Урок 10 Задача 4 Модифицируйте предыдущую задачу так, чтобы если в адресную строку передан некорректный id поста, то пользователю показывалось следующее представление (сделать отдельным файлом):

Route::get('/lessonten4/posts/{id}/', 'LessonTenPost@lessonTen4')->where('id','[1-9]');

//Урок 10 Задача 5  В контроллере Post сделайте действие showAll, маршрут к которому будет следующий: /posts/.
//
//Данное действие должно показывать на экран список всех постов с их тайтлами и короткими описаниями, но без полного текста. Каждый пост должен иметь ссылку на свое полное описание (то есть на страницу действия showOne для этого поста).
//
//Верстка информации об одном посте (она должна повторяться в цикле для каждого поста):

Route::get('/lessonten5/posts/', 'LessonTenPost@lessonTen5ShowAll');


// Урок 10 Задача 7  В контроллере Product сделайте действие showProduct, маршрут к которому будет следующий: /product/:category_id/:product_id, где :category_id будет представлять собой номер категории в массиве $this->categories, а :product_id - номер продукта в подмассиве products соответствующей категории.
//
//Данное действие должно будет выводить запрошенный продукт с названием, ценой, наличием на складе, описанием продукта и названием категории этого продукта.
//
//Пусть наличие на складе выводится либо строкой 'есть в наличии', либо строкой 'нет в наличии'.

Route::get('/lessonten7/product/{category_id}/{product_id}/', 'LessonTenProduct@lessonTen7showProduct')->where(['category_id'=>'[1-2]','product_id'=>'[1-3]']);


// Урок 10 Задача 8  В контроллере Product сделайте действие showCategory, маршрут к которому будет следующий: /product/:category_id/, где :category_id будет представлять собой номер категории в массиве $this->categories.
//
//Данное действие должно будет выводить список продуктов данной категории. Пусть в списке будет название продукта и цена.
//
//Название продукта должно быть ссылкой на страницу одного продукта (то есть на действие showProduct).


Route::get('/lessonten8/product/{category_id}/', 'LessonTenProduct@lessonTen8showCategory')->where(['category_id'=>'[1-2]']);




// Урок 10 Задача 9  Отредактируйте представление действия showProduct так, чтобы название категории продукта было ссылкой на список продуктов данной категории.

Route::get('/lessonten9/product/{category_id}/{product_id}/', 'LessonTenProduct@lessonTen9showProduct')->where(['category_id'=>'[1-2]','product_id'=>'[1-3]']);

// Урок 10 Задача 10 В контроллере Product сделайте действие showCategoryList, маршрут к которому будет следующий: /categories/.
//Данное действие должно будет выводить список всех категорий. Пусть выводится название категории и количество продуктов в этой категории.
//Название категории должно быть ссылкой на список продуктов данной категории.

Route::get('/lessonten10/categories/', 'LessonTenProduct@lessonTen10showCategoryList');



// Урок 11 Задача 1 Сделайте форму с инпутом, принимающим своим значением число. После отправки формы выведите через var_dump квадрат этого числа.

Route::get('/lessonleven1/', 'LessonEleven@lessonEleven1');

// Урок 11 Задача 2 Модифицируйте предыдущую задачу так, чтобы квадрат переданного числа выводился в представлении над формой.

Route::get('/lessonleven2/', 'LessonEleven@lessonEleven2');

// Урок 11 Задача 3 Сделайте форму с двумя инпутами, в которые будут вводится числа. После отправки формы выведите на экран сумму этих чисел, а форму уберите.

Route::get('/lessonleven3/', 'LessonEleven@lessonEleven3');

// Урок 11 Задача 4 В каком-нибудь действии сделайте форму с тремя инпутами, в которые будут вводится числа. Отправьте эту форму на другое действие и выведите переданные числа в представлении этого действия.

Route::get('/lessonleven4/', 'LessonEleven@lessonEleven4form');


Route::get('/lessonleven4/result/', 'LessonEleven@lessonEleven4result');


// Урок 12 Задача 1 Сделайте два действия. В представлении первого действия покажите форму, которая будет отправляться на второе действие методом POST. Выведите данные, отправленные через форму, в представлении второго действия.

Route::get('/lessontwelve1/', 'LessonTwelve@lessontwelve1form');

Route::post('/lessontwelve1/result/', 'LessonTwelve@lessonTwelve1result');


// Урок 12 Задача 2 Выведите на экран метод HTTP запроса.

Route::get('/lessontwelve2/', 'LessonTwelve@lessontwelve2form');
Route::post('/lessontwelve2/result/', 'LessonTwelve@lessonTwelve2result');


// Урок 12 Задача 3 Если метод HTTP запроса - GET, то выведите на экран сообщение '!', а если POST, то сообщение '!!'.

Route::get('/lessontwelve3/', 'LessonTwelve@lessontwelve3form');
Route::post('/lessontwelve3/result/', 'LessonTwelve@lessonTwelve3result');


// Урок 12 Задача 4 Сделайте форму, которая будет спрашивать у пользователя два числа с помощью двух инпутов. После отправки формы методом POST выведите на экран сумму введенных чисел. Пусть и форма, и результат показываются одним действием.


Route::match(['get','post'],'/lessontwelve4/', 'LessonTwelve@lessontwelve4');

// Урок 13 Задача 1 Пусть в вашей форме есть произвольное количество инпутов. После отправки формы получите массив отправленных значений, отправьте его в представление и выведите эти данные в виде списка ul.

Route::match(['get','post'],'/lesson13-1/', 'Lesson13@lesson13_1');


// Урок 13 Задача 2 Пусть у нас будет форма, имитирующая регистрацию пользователя на сайте. Спросите с помощью этой формы у пользователя его имя, фамилию, email, желаемый логин, желаемый пароль (инпут с типом password). После отправки формы выведите на экран в виде списка ul все отправленные поля, кроме поля с паролем и email. Решите задачу сначала через except, а затем через only.


Route::match(['get','post'],'/lesson13-2/', 'Lesson13@lesson13_2');

// Урок 13 Задача 3 Самостоятельно попробуйте получить данные из формы, передав при этом два параметра в ваш маршрут.


Route::match(['get','post'],'/lesson13-3/{id}/{page}', 'Lesson13@lesson13_3');


