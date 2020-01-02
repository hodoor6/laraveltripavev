<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;



class LessonSeven extends Controller
{
//Урок 7 Задача 1 Передайте из действия в представление массив с числами. Выведите этот массив в виде списка ul.
    public function lessonSeven1()
    {

        return view('lessonseven.lessonseven1',['numbers' => [1,2,3,4,5]]);
    }


//Урок 7 Задача 2 Модифицируйте предыдущую задачу так, чтобы в пункты списка выводились квадраты элементов массива.
    public function lessonSeven2()
    {

        return view('lessonseven.lessonseven2',['numbers' => [1,2,3,4,5]]);
    }

//// Урок 7 Задача 3 Модифицируйте предыдущую задачу так, чтобы в пункты списка выводились квадратные корни элементов массива.
    public function lessonSeven3()
    {

        return view('lessonseven.lessonseven3',['numbers' => [1,2,3,4,5]]);
    }

//  Урок 7 Задача 4 Передайте из действия в представление массив со строками. Выведите этот массив в виде списка ul так, чтобы выводились и ключи, и значения элементов массива.
    public function lessonSeven4()
    {

        return view('lessonseven.lessonseven4',['numbers' => [1,2,3,4,5]]);
    }

    //  Урок 7 Задача 5 Передайте из действия в представление массив со строками. Выведите этот массив в виде списка ul так, чтобы выводились и ключи, и значения элементов массива.
    public function lessonSeven5()
    {

        return view('lessonseven.lessonseven5',['numbers' => [1,2,3,4,5]]);
    }


    //  Урок 7 Задача 6 Передайте из действия в представление массив с числами. Выведите этот массив в виде списка ul. Сделайте так, чтобы в список попадали только элементы, значениями которых служат четные числа.

    public function lessonSeven6()
    {

        return view('lessonseven.lessonseven6',['numbers' => [1,2,3,4,5]]);
    }

    //  Урок 7 Задача 7 Из действия в представление передается переменная $data. Эта переменная может содержать массив с числами либо быть обычным числом. Если переменная $data - массив, то выведите элементы этого массива в виде списка ul, а если переменная $data - число, то выведите это число в абзаце..

    public function lessonSeven7()
    {

        return view('lessonseven.lessonseven7',['data' => [1,2,3,4,5]]);
    }

    // Урок 7 Задача 8  Передайте из действия в представление массив с числами от 1 до 25. Выведите его в виде таблицы 5 на 5.

    public function lessonSeven8()
    {

       // return view('lessonseven.lessonseven8',['number' => [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,19,20,21,22,23,24,25]]);
        return view('lessonseven.lessonseven8', ['number' => [
            [1, 2, 3, 4, 5],
            [6, 7, 8, 9, 10],
            [11, 12, 13, 14, 15],
            [16, 17, 18, 19, 20],
            [21, 22, 33, 24, 25]
        ]]);
    }

     // Урок 7 Задача 9 Передайте из действия в представление массив с работниками:

    public function lessonSeven9()
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
        ];

        return view('lessonseven.lessonseven9', ['data' => $employees]);
    }


// Урок 7 Задача 10 Выведите массив из предыдущей задачи в виде таблицы table.

    public function lessonSeven10()
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
        ];

        return view('lessonseven.lessonseven10', ['data' => $employees]);
    }


//Урок 7 Задача 11 Из действия в представление передается массив со строками. Выведите элементы этого массива в виде списка ul. Сделайте так, чтобы перед значением элемента, выводился еще и порядковый номер итерации, начиная с 0.

    public function lessonSeven11()
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
        ];

        return view('lessonseven.lessonseven11', ['data' => $employees]);
    }




}