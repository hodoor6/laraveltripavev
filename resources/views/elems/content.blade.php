{{--/Урок 10 задание 3--}}

@extends('layouts.post')

@section('title')

{{$post['title']}}
@endsection

@section('header')

{{$post['title']}}
@endsection


@section('content')
<div class="info">
	<span class="date">
		{{$post['date']}}</span>
    <span class="author">
		{{$post['author']}}</span>
</div>
<div class="text">
    {{$post['text']}}
</div>
@endsection

