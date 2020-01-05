{{--Урок 10 задача 4--}}
@extends('layouts.post')
@section('title')
    Станицы с id = {{$id}} не существует!
@endsection
@section('header')
    Извините, страница с id = {{$id}} не найдена!
@endsection
@section('content')
    <div class="text">
        Извините, страницы с id = {{$id}} не существует!
    </div>
@endsection
