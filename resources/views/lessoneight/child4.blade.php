@extends('lessoneight.lessoneight4')
{{--// Урок 8 Задача 4 Вынесите хедер и футер сайта в отдельные подшаблоны. Разместите их в папке elems. Подключите их к основному макету.  --}}
@section('title')
    {{$title}}
@endsection

@section('header')
    <br>
    @include('elems.header')

@endsection
@section('aside')
    @parent
    {{$aside}}
    <p>Это дополнение к основной боковой панели.</p>

@endsection



@section('content')
    {{$main}}

@endsection


@section('footer')
    <br>
    @include('elems.footer')

@endsection


