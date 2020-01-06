{{-- // Урок 10 Задача 8    В контроллере Product сделайте действие showCategory, маршрут к которому будет следующий: /product/:category_id/, где :category_id будет представлять собой номер категории в массиве $this->categories.

Данное действие должно будет выводить список продуктов данной категории. Пусть в списке будет название продукта и цена.

Название продукта должно быть ссылкой на страницу одного продукта (то есть на действие showProduct).      --}}
@extends('lessonten.layouts.lessonten7')

@section('title',$category['name'])

@section('content')
    <table border="1" width="500" align="center" style="text-align: center">
        <tr>
            <th>Название</th>
            <th>Цена</th>

        </tr>
        @forelse($category as $products)
            @if(!$loop->first)
                @forelse($products as $product)
                    <tr>
                        <td><a href="/lessonten7/product/{{$id}}/{{$loop->iteration}}/"> {{ $product['name'] }}</a></td>
                        <td>{{ $product['cost'] }}</td>
                    </tr>
                @empty

                    <td> <p>Нет в данной категории товаров</p></td>
                @endforelse
            @else

        @section('header')
            <p>{{$products}}</p>
        @endsection
        @endif
        @empty

            <td> <p>Нет в данной категории товаров</p></td>
        @endforelse

    </table>
@endsection
