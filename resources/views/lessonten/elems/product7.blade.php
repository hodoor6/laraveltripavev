{{-- // Урок 10 Задача 7    В контроллере Product сделайте действие showProduct, маршрут к которому будет следующий: /product/:category_id/:product_id, где :category_id будет представлять собой номер категории в массиве $this->categories, а :product_id - номер продукта в подмассиве products соответствующей категории.

Данное действие должно будет выводить запрошенный продукт с названием, ценой, наличием на складе, описанием продукта и названием категории этого продукта.

Пусть наличие на складе выводится либо строкой 'есть в наличии', либо строкой 'нет в наличии'.   --}}

{{--// Урок 10 Задача 9 Отредактируйте представление действия showProduct так, чтобы название категории продукта было ссылкой на список продуктов данной категории.--}}

@extends('lessonten.layouts.lessonten7')

@section('title',$product['name'])
@section('header')
    <a href ="/lessonten8/product/{{$id}}/">{{$category}}</a>
    @endsection
@section('content')
    <table border="1" width="500" align="center" style="text-align: center">
        <tr>
            <th>Название</th>
            <th>Цена</th>
            <th>Наличие на складе</th>
            <th>Описание продукта</th>
        </tr>
        @if($product['inStock'] == false)
            @php $str = 'нет в наличие'; @endphp
        @else
            @php $str = 'есть в наличие'; @endphp
        @endif
        <tr>
            <td>{{ $product['name'] }}</td>
            <td>{{ $product['cost'] }}</td>
            <td>{{$str}} </td>
            <td>{{ $product['desc'] }}</td>
        </tr>
           </table>
@endsection