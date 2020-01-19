{{--//Урок 28. (laravel). Задача 12-1. Получите всех пользователей вместе с их странами--}}

<th>Каталог продуктов</th>

<table border ="1" width="400" align="center">

        <tr>


            <th>Продукти</th>
            <th>Категории</th>

        @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>

        </tr>

    @foreach ($product->lesson28categorieRole as $category)
            <tr>

        <td >{{ $category->name }}</td>
        <td >{{ $category->name }}</td>
            </tr>
        @endforeach


    @endforeach

    </table>