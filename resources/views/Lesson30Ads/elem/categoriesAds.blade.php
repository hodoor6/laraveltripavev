{{--//Урок 30. (laravel). Задача 3.  Реализуйте доску объявлений.--}}
{{--//На главной странице нашего сайта должен быть список рубрик объявлений.--}}
{{--//По заходу на определенную рубрику должен выводится список объявлений из данной рубрики. Пусть объявления сортируются по убыванию даты. //Под списком объявлений сделайте форму, с помощью которой можно будет оставить новое объявление.--}}
@extends('Lesson30Ads.layouts.Ads')
@section('title')

{{$title}}
@endsection
@section('content')

<table border="1"
       align="center"
       width="400">
    <tr>
        <th>№</th>
        <th>Категории объявлений</th>
    </tr>
    @foreach($categoriesAds as $categoryAds)

        <tr>
            <td>{{$categoryAds->id}}</td>
            <td><a href="lesson30-3/ads/{{$categoryAds->id}}/">{{$categoryAds->category}}</a></td>
        </tr>

    @endforeach
