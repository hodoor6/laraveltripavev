<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;



class LessonFive extends Controller
{
    // Урок 5. Задача 1 Пусть в действии контроллера даны переменные $name (имя), $age (возраст) и $salary (зарплата). Передайте значения этих переменных в представление и выведите содержимое каждой из этих переменных в отдельном абзаце.
    public function lessonFiveOne()
    {

        return view('lessonfive.lessonfiveone',  ['name'=>'Сергей','age' => '30','salary' => '5000']);
    }

// Урок 5. Задача 2 Пусть в действии контроллера даны переменные $name (имя), $age (возраст) и $salary (зарплата). Передайте значения этих переменных в представление и выведите содержимое каждой из этих переменных в отдельном абзаце.
    public function lessonFiveTwo()
    {

        return view('lessonfive.lessonfivetwo',  ['class'=>'body']);
    }

//Урок 5. Задача 3 Пусть в представлении даны 3 инпута. Передайте из действия в представление 3 переменные, значения которых запишите в атрибуты value наших инпутов. переменную.

    public function lessonFive3()
    {

        return view('lessonfive.lessonfive3',  ['var1'=>'test','var2'=>'test','var3'=>'test']);
    }

//Урок 5. Задача 4 Пусть в представлении дан абзац. Передайте из действия в представление переменную, содержащую CSS код, задающий красный цвет текста. С помощью атрибута style покрасьте наш абзац в красный цвет.

    public function lessonFive4()
    {

        return view('lessonfive.lessonfive4',  ['color'=>'color:red']);
    }

    //Урок 5. Задача 5 Пусть в действии дана переменная $text, содержащая текст ссылки, и переменная $href, содержащая адрес ссылки. Передайте эти переменные в представление и сформируйте с их помощью HTML ссылку.

    public function lessonFive5()
    {

        return view('lessonfive.lessonfive5',  ['text'=>'нажать','href'=>'#']);
    }

    //Урок 5. Задача 6 Выведите в представлении текущую дату в формате день.месяц.год.

    public function lessonFive6()
    {

        return view('lessonfive.lessonfive6');

     //   Урок 5. Задача 7 Пусть из действия в представление передаются данные работника в виде массива. Пусть в массиве будет ключ name (имя), ключ age (возраст) и ключ salary (зарплата). Выведите каждый элемент массива в отдельном абзаце.
    }
    public function lessonFive7()
    {

        return view('lessonfive.lessonfive7',['worker' => ['name'=>'Сергей','age' => '30','salary' => '5000']]);
    }

    //   Урок 5. Задача 8 Передайте в представление какой-нибудь массив. Выведите на экран количество элементов в этом массиве.
    public function lessonFive8()
    {
        return view('lessonfive.lessonfive8',['worker' => ['name'=>'Сергей','age' => '30','salary' => '5000']]);
    }
//   Урок 5. Задача 9 Пусть из действия в представление передается переменная $city (город). Выведите в представлении названия города из этой переменной. Если же город не передан - пусть по умолчанию выведется город Москва.
    public function lessonFive9()
    {
        return view('lessonfive.lessonfive9', ['city'=>'Пенза']);
    }





//   Урок 5. Задача 10  Пусть из действия в представление передается массив $location (местоположение) с ключами country (страна), city (город). Выведите каждый элемент это массива в отдельном абзаце. Сделайте так, чтобы, если не задана страна, то по умолчанию вывелась Россия, а если не задан город, то по умолчанию вывелась Москва.

public function lessonFive10()
{
    return view('lessonfive.lessonfive10', ['location'=>['country'=>'', 'city'=>'Днепр']]);
}


//Урок 5  Задача 11 Пусть из действия в представление передаются переменные $year (год), $month (месяц) и $day (день). Сделайте так, чтобы, если какая-либо из этих переменных не задана, то вместо нее выведется текущее значение (текущий год, месяц или день).
    public function lessonFive11()
{
    return view('lessonfive.lessonfive11', ['year'=>'1900','month'=>'12','day'=>'15']);
}



//Урок 5. Задача 12 Пусть в переменной $str хранится строка с тегами, например, '<b>строка</b>'. Выведите эту строку на экран так, чтобы теги выполнили свое действие (то есть чтобы в данном случае текст стал жирным).
    public function lessonFive12()
{
    return view('lessonfive.lessonfive12', ['str'=>'<b>строка</b>']);
}

//Урок 5 Задача 13 С помощью комментариев Blade закомментируйте какую-нибудь часть кода представления.
    public function lessonFive13()
    {
        return view('lessonfive.lessonfive13', ['str'=>'<b>строка</b>']);
    }

//Урок 5 Задача 14 Описанным способом выполните какой-нибудь PHP код.
    public function lessonFive14()
    {
        return view('lessonfive.lessonfive14', ['str'=>'<b>строка</b>']);
    }
}
