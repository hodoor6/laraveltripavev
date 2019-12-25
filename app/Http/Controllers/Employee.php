<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;


//Урок 3 Задача 10 Создайте контроллер Employee (работник). В конструкторе класса запишите в свойство $this->employees массив с работниками:
class Employee extends Controller
{
    private $employees;

    public function __construct()
    {
        $this->employees = [
            1 => [
                'name' => 'user1',
                'surname' => 'surname1',
                'salary' => 1000,
            ],
            2 => [
                'name' => 'user2',
                'surname' => 'surname2',
                'salary' => 2000,
            ],
            3 => [
                'name' => 'user3',
                'surname' => 'surname3',
                'salary' => 3000,
            ],
            4 => [
                'name' => 'user4',
                'surname' => 'surname4',
                'salary' => 4000,
            ],
            5 => [
                'name' => 'user5',
                'surname' => 'surname5',
                'salary' => 5000,
            ],
        ];
    }

//Урок 3 Задача 11 В контроллере Employee сделайте действие showOne. Параметром оно должно принимать номер работника в массиве $this->employees и выводить на экран строку с именем, фамилией и зарплатой работника.
    public function showOne($id)
    {
        var_dump($this->employees[$id]);

        foreach ($this->employees[$id] as
                 $key => $value) {
            echo "$value ";
        }

        $worker = $this->employees[$id];
        $str = "Имя: $worker[name], фамилия: $worker[surname], зарплата: $worker[salary].";
        return $str;
    }


//Урок 3 Задачи 12 В контроллере Employee сделайте действие showField. Параметрами оно должно принимать номер работника в массиве $this->employees и название одного из полей ('name', 'surname' или 'salary'). Действие выводить на экран значение соответствующего поля соответствующего работника.

    public function showField($id,$value)
    {
        $this->employees[$id][$value];

        $worker = $this->employees[$id];
        $str = "Выбран параметр работника '$value' = $worker[$value].";
        return $str;

    }
}