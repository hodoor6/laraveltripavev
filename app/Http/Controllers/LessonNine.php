<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class LessonNine extends Controller
{
// Урок 9 Задача 1  Сформируйте из нашего массива следующий HTML код:
//<a href="http://href1">text1</a>
//<a href="http://href2">text2</a>
//<a href="http://href3">text3</a>
    public function lessonNine1()
    {

        $links = [
            [
                'text' => 'text1',
                'href' => 'href1',
            ],
            [
                'text' => 'text2',
                'href' => 'href2',
            ],
            [
                'text' => 'text3',
                'href' => 'href3',
            ],
        ];

        return view('lessonnine.lessonnine1', ['main' => $links]);


    }

// Урок 9 Задача 2  Модифицируйте предыдущую задачу так, чтобы каждая ссылка выводилась в отдельном теге li тега ul.

    public function lessonNine2()
    {

        $links = [
            [
                'text' => 'text1',
                'href' => 'href1',
            ],
            [
                'text' => 'text2',
                'href' => 'href2',
            ],
            [
                'text' => 'text3',
                'href' => 'href3',
            ],
        ];

        return view('lessonnine.lessonnine2', ['main' => $links]);


    }

// Урок 9 Задача 3 Выведите этот массив в виде следующей таблицы:

    public function lessonNine3()
    {

        $employees = [
            [
                'name' => 'user1',
                'surname' => 'surname1',
                'salary' => 1000,
            ],
            [
                'name' => 'user2',
                'surname' => 'surname2',
                'salary' => 2000,
            ],
            [
                'name' => 'user3',
                'surname' => 'surname3',
                'salary' => 3000,
            ],
            [
                'name' => 'user4',
                'surname' => 'surname4',
                'salary' => 4000,
            ],
            [
                'name' => 'user5',
                'surname' => 'surname5',
                'salary' => 5000,
            ],
        ];

        return view('lessonnine.lessonnine3', ['employees' => $employees]);


    }// // Урок 9 Задача 4  Модифицируйте предыдущую задачу так, чтобы в первом ряду появились заголовки таблицы:

    public function lessonNine4()
    {

        $employees = [
            [
                'name' => 'user1',
                'surname' => 'surname1',
                'salary' => 1000,
            ],
            [
                'name' => 'user2',
                'surname' => 'surname2',
                'salary' => 2000,
            ],
            [
                'name' => 'user3',
                'surname' => 'surname3',
                'salary' => 3000,
            ],
            [
                'name' => 'user4',
                'surname' => 'surname4',
                'salary' => 4000,
            ],
            [
                'name' => 'user5',
                'surname' => 'surname5',
                'salary' => 5000,
            ],
        ];

        return view('lessonnine.lessonnine4', ['employees' => $employees]);

    }


//Урок 9 Задача 5  Модифицируйте предыдущую задачу так, чтобы появилась еще одна колонка в начале таблицы, в которой будут выводится порядковые номера работников (то есть ключи элементов массива). Нумерация должна начинаться с единицы, а не с нуля.



    public function lessonNine5()
    {

        $employees = [
            [
                'name' => 'user1',
                'surname' => 'surname1',
                'salary' => 1000,
            ],
            [
                'name' => 'user2',
                'surname' => 'surname2',
                'salary' => 2000,
            ],
            [
                'name' => 'user3',
                'surname' => 'surname3',
                'salary' => 3000,
            ],
            [
                'name' => 'user4',
                'surname' => 'surname4',
                'salary' => 4000,
            ],
            [
                'name' => 'user5',
                'surname' => 'surname5',
                'salary' => 5000,
            ],
        ];

        return view('lessonnine.lessonnine5', ['employees' => $employees]);

    }
// Урок 9 Задача 6  Модифицируйте предыдущую задачу так, чтобы на экран выводились только работники с зарплатой более 2000.



    public function lessonNine6()
    {

        $employees = [
            [
                'name' => 'user1',
                'surname' => 'surname1',
                'salary' => 1000,
            ],
            [
                'name' => 'user2',
                'surname' => 'surname2',
                'salary' => 2000,
            ],
            [
                'name' => 'user3',
                'surname' => 'surname3',
                'salary' => 3000,
            ],
            [
                'name' => 'user4',
                'surname' => 'surname4',
                'salary' => 4000,
            ],
            [
                'name' => 'user5',
                'surname' => 'surname5',
                'salary' => 5000,
            ],
        ];

        return view('lessonnine.lessonnine6', ['employees' => $employees]);

    }

 // Урок 9 Задача 7 Выведите этот массив в виде HTML таблицы с тремя колонками: имя, фамилия и статус. В последней колонке должен выводится статус пользователя: забанен он или нет. Если ключ banned для данного пользователя имеет значение true, то выводите слово 'забанен', а если false, то слово 'активен'.



    public function lessonNine7()
    {
        $users = [
            [
                'name' => 'user1',
                'surname' => 'surname1',
                'banned' => true,
            ],
            [
                'name' => 'user2',
                'surname' => 'surname2',
                'banned' => false,
            ],
            [
                'name' => 'user3',
                'surname' => 'surname3',
                'banned' => true,
            ],
            [
                'name' => 'user4',
                'surname' => 'surname4',
                'banned' => false,
            ],
            [
                'name' => 'user5',
                'surname' => 'surname5',
                'banned' => false,
            ],
        ];
        return view('lessonnine.lessonnine7', ['users' => $users]);

    }

// Урок 9 Задача 8 Модифицируйте предыдущую задачу так, чтобы цвет текста tr с забаненным пользователем был красного цвета, а с активным пользователем - зеленого.


    public function lessonNine8()
    {
        $users = [
            [
                'name' => 'user1',
                'surname' => 'surname1',
                'banned' => true,
            ],
            [
                'name' => 'user2',
                'surname' => 'surname2',
                'banned' => false,
            ],
            [
                'name' => 'user3',
                'surname' => 'surname3',
                'banned' => true,
            ],
            [
                'name' => 'user4',
                'surname' => 'surname4',
                'banned' => false,
            ],
            [
                'name' => 'user5',
                'surname' => 'surname5',
                'banned' => false,
            ],
        ];
        return view('lessonnine.lessonnine8', ['users' => $users]);

    }

    //Урок 9 Задача 9 Из действия в представление передается массив со строками. Переберите этот массив циклом и в каждой итерации цикла создайте инпут, сделав значением инпута элемент массива..

    public function lessonNine9()
    {

        return view('lessonnine.lessonnine9', ['inputs' => [ 'строка 1','строка 2','строка 3','строка 4']]);

    }

    //Урок 9 Задача 10 Из действия в представление передается массив со строками. Сделайте из этого массива выпадающий список select.

    public function lessonNine10()
    {

        return view('lessonnine.lessonnine10', ['inputs' => [ 'строка 1','строка 2','строка 3','строка 4']]);

    }

    //Урок 9 Задача 11  Сделайте в действии контроллера массив с числами от 1 до последнего дня текущего месяца. Передайте этот массив в представление. Сделайте также переменную, в которой будет хранится номер текущего дня. Также передайте эту переменную в представление.
    //
    //Переберите циклом переданный массив и выведите его в виде списка ul. При этом тегу li, в котором хранится номер текущего дня месяца добавьте класс active.

    public function lessonNine11()
    {


      $todayDay =  date ('d');

      $day = range(1,$todayDay);
        return view('lessonnine.lessonnine11', ['days' => $day,'todayDay' => $todayDay ]);

    }

}