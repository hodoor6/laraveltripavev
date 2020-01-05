{{--Урок 10 Задача 5--}}
@extends('layouts.post')


@section('title','Cписок страниц')
@section('header','Cписок страниц')
    @foreach($post as $key => $page)
@section('content')

<div class="post">
    <h2>  {{  $page['title']}}</h2>
    <div class="info">
		<span class="date">
			{{  $page['date']}}</span>
        <span class="author">
		{{  $page['author']}}	</span>
    </div>
    <div class="text">
        {{  $page['teaser']}}
    </div>
    <div class="more">
        <a href="/posts/{{$key}}/">ссылка
            на пост</a>
    </div>
</div>
@parent
@endsection
@endforeach
