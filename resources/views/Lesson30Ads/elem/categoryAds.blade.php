{{--//Урок 30. (laravel). Задача 3.  Реализуйте доску объявлений.--}}
{{--//На главной странице нашего сайта должен быть список рубрик объявлений.--}}
{{--//По заходу на определенную рубрику должен выводится список объявлений из данной рубрики. Пусть объявления сортируются по убыванию даты. //Под списком объявлений сделайте форму, с помощью которой можно будет оставить новое объявление.--}}

@extends('Lesson30Ads.layouts.Ads')
@section('title')

   Категория {{$categoryAds->category}}
@endsection

{{Session::get('sms')}}
@section('content')

<form action="/lesson30-3/ads/{{$categoryAds->id}}" method="get">
    {{ csrf_field() }}
    <lebel>Ваше имя</lebel>

    <p><input type="text" name="name" placeholder="Ведите ваше имя" value="{{old('name')}}"></p>

    <lebel>Текст объявления</lebel>

    <p><textarea rows="10" cols="45" name="text" placeholder="Ведите ваше сообщения"></textarea>{{old('text')}}</p>

    <input type="submit" name="submit" value="Отправить">
</form>

@if(isset($categoryAds))
<table border="1"
       align="center"
       width="400">
    <tr>
        <th>№</th>
        <th>Категория</th>
        <th>Сообщение</th>
        <th>Дата</th>
        <th>Автор</th>
    </tr>

{{--           {{dump($categoryAds->advertisement)}}--}}
           @foreach($categoryAds->advertisement as $Ads )
        <tr>
            <td>{{$categoryAds->id}}</td>
            <td><a href="/lesson30-3/">{{$categoryAds->category}}</a>

            </td>
                <td>{{$Ads->text}}</td>
                <td>{{$Ads->date}}</td>
                <td>{{$Ads->name}}</td>
    <tr>
            @endforeach

@endif

@endsection