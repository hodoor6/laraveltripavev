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




}
