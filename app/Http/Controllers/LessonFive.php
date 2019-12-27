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


}
