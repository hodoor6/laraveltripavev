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


}