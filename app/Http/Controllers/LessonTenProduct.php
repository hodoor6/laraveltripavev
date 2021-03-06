<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


// Урок 10 Задача 6  Создайте контроллер Product (продукт). В конструкторе класса запишите в свойство $this->categories массив с категориями и продуктами, принадлежащими этим категориям (в данном массиве ключ cost - цена продукта, а inStock - наличие продукта на складе):


class LessonTenProduct extends Controller
{

    private $categories = [];

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
                'name' => 'Категория 2','products' => [
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



// Урок 10 Задача 7  В контроллере Product сделайте действие showProduct, маршрут к которому будет следующий: /product/:category_id/:product_id, где :category_id будет представлять собой номер категории в массиве $this->categories, а :product_id - номер продукта в подмассиве products соответствующей категории.
//
//Данное действие должно будет выводить запрошенный продукт с названием, ценой, наличием на складе, описанием продукта и названием категории этого продукта.
//
//Пусть наличие на складе выводится либо строкой 'есть в наличии', либо строкой 'нет в наличии'.
    public function lessonTen7showProduct ($idcategory,$productId) {


        $category = $this->categories[$idcategory]['name'];
        $product = $this->categories[$idcategory]['products'][$productId];

        return view('.lessonten.elems.product7', ['product'=> $product,'category'=> $category,'id'=>$idcategory]);

}


// Урок 10 Задача 8  В контроллере Product сделайте действие showCategory, маршрут к которому будет следующий: /product/:category_id/, где :category_id будет представлять собой номер категории в массиве $this->categories.
//
//Данное действие должно будет выводить список продуктов данной категории. Пусть в списке будет название продукта и цена.
//
//Название продукта должно быть ссылкой на страницу одного продукта (то есть на действие showProduct).
    public function lessonTen8showCategory ($idcategory) {

        $category = $this->categories[$idcategory];

        return view('.lessonten.elems.productcategory8', ['category'=> $category,'id'=> $idcategory,]);

    }

    // Урок 10 Задача 9 Отредактируйте представление действия showProduct так, чтобы название категории продукта было ссылкой на список продуктов данной категории.

    public function lessonTen9showProduct ($idcategory,$productId) {



        $category = $this->categories[$idcategory]['name'];
        $product = $this->categories[$idcategory]['products'][$productId];

        return view('.lessonten.elems.product7', ['product'=> $product,'category'=> $category,'id'=>$idcategory]);

    }




// Урок 10 Задача 10  В контроллере Product сделайте действие showCategoryList, маршрут к которому будет следующий: /categories/.
//
//Данное действие должно будет выводить список всех категорий. Пусть выводится название категории и количество продуктов в этой категории.
//
//Название категории должно быть ссылкой на список продуктов данной категории.

    public function lessonTen10showCategoryList () {

        return view('lessonten.elems.allcategory10', ['categories'=>  $this->categories]);

    }

}