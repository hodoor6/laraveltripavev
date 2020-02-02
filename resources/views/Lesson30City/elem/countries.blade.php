{{--//Урок 30. (laravel). Задача 4.   Реализуйте сайт про города и страны.--}}
{{--//На главной странице сайта должен быть список стран. Каждая страна должна представлять собой ссылку. При переходе по этой ссылке должен открыться список городов данной страны.--}}
{{--//Каждый город также должен представлять собой ссылку. При переходе по этой ссылке должен открыться список достопримечательностей данного города, также в виде ссылок. Каждая из этих ссылок должна вести на страницу с описанием достопримечательности.--}}

@extends('Lesson30City.layouts.siteSight')
@section('title')
    Главная страница сайта</br>
{{$title}}
@endsection

@section('content')
<table border="1"
       align="center"
       width="400">
    <tr>
        <th>№</th>
        <th>Cписок стран</th>
    </tr>
    @foreach($countriesAll as $country)

        <tr>
            <td>{{$loop->iteration}}</td>
            <td><a href="/lesson30-4/city/{{$country->id}}/">{{$country->country}}</a></td>
        </tr>

    @endforeach
@endsection
