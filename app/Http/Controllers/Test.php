<?php

//Урок 3 Задача 8 Создайте контроллер Test, а в нем действие sum. Сделайте так, чтобы данное действие было доступно по адресу /test/sum/:num1/:num2/, где где вместо :num1 и :num2 будут какие-нибудь числа. Пусть по обращению к данному действию на экран выводится сумма переданных чисел.

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class Test
{

    public function sum ($sum1,$sum2){
        echo $sum1 + $sum2;
    }
}