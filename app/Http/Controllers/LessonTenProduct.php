<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


// Урок 10 Задача 6  Создайте контроллер Product (продукт). В конструкторе класса запишите в свойство $this->categories массив с категориями и продуктами, принадлежащими этим категориям (в данном массиве ключ cost - цена продукта, а inStock - наличие продукта на складе):


class LessonTenProduct extends Controller
{

    private $categories;

    public function __construct()
    {
        $this->categories = [
            1 => [
                'name' => 'Категория 1',
                'products' => [
                    1 => [
                        'name'    => 'Продукт 1',
                        'cost'    => '300',
                        'inStock' => true,
                        'desc'    => 'Описание продукта 1'
                    ],
                    2 => [
                        'name'    => 'Продукт 2',
                        'cost'    => '400',
                        'inStock' => true,
                        'desc'    => 'Описание продукта 2'
                    ],
                    3 => [
                        'name'    => 'Продукт 3',
                        'cost'    => '500',
                        'inStock' => false,
                        'desc'    => 'Описание продукта 3'
                    ],
                ],
            ],
            2 => [
                'name' => 'Категория 2',
                'products' => [
                    1 => [
                        'name'    => 'Продукт 1',
                        'cost'    => '700',
                        'inStock' => true,
                        'desc'    => 'Описание продукта 1'
                    ],
                    2 => [
                        'name'    => 'Продукт 2',
                        'cost'    => '800',
                        'inStock' => false,
                        'desc'    => 'Описание продукта 2'
                    ],
                    3 => [
                        'name'    => 'Продукт 3',
                        'cost'    => '900',
                        'inStock' => false,
                        'desc'    => 'Описание продукта 3'
                    ],
                ],
            ],
        ];


}
}