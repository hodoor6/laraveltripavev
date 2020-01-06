{{-- // Урок 10 Задача 10     В контроллере Product сделайте действие showCategoryList, маршрут к которому будет следующий: /categories/.

Данное действие должно будет выводить список всех категорий. Пусть выводится название категории и количество продуктов в этой категории.

Название категории должно быть ссылкой на список продуктов данной категории.     --}}
@extends('lessonten.layouts.lessonten7')

@section('title','Cписок категорий')
@section('header','Cписок категорий')

@section('content')


    <table border="1" width="500" align="center" style="text-align: center">
        <tr>
            <th>Название категории</th>
            <th>Количество продуктов</th>

        </tr>

@forelse($categories as $key=>$category)
            <tr>
                            <td><a href="/lessonten8/product/{{$loop->iteration}}/"> {{$category['name']}}</a></td>
                            <td>{{count($category['products'])}}</td>
                        </tr>
                            @empty
               < <p>Нет в данной категории и товаров</p>
          @endforelse
           </table>
@endsection


