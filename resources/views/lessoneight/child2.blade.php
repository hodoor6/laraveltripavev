@extends('lessoneight.lessoneight2')
{{--// Урок 8 Задача 2 Сделайте так, чтобы каждое действие отправляло в представление переменную $title, содержащую тайтл страницы. Модифицируйте код предыдущей задачи так, чтобы переданный тайтл попадал в тег title макета сайта.--}}
@section('title')
    {{$title}}
@endsection


@section('content')
    <p>Это содержимое тела страницы.</p>

    {{$main}}
@endsection

