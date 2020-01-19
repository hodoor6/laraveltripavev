{{--//Урок 28. (laravel). Задача 12-1. Получите всех пользователей вместе с их странами--}}

<th>Каталог продуктов</th>

<table border ="1" width="400" align="center">

        <tr>


            <th>Категории</th>
            <th>Продукти</th>

        @foreach ($categories as $category)
        <tr>
            <td><b>{{ $category->name }}</b></td>
        </tr>
    @foreach ($category->lesson28productRoles as $key =>$product)
            <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>

            </tr>
        @endforeach

    @endforeach

    </table>