{{--///QueryBuilder--}}

{{--//Урок 30. (laravel). Задача 2.  Реализуйте модерирование сообщений гостевой книги. Пусть будет отдельная страница, на которой модератор видит список сообщений, а рядом с каждым сообщением - ссылку на удаление и ссылку на редактирование этого сообщения.--}}
@extends('Lesson30GuestBookQueryBuilder.layouts.GuestBook')
@section('title')
    @if (session('status'))
        {{session('status')}}
    @endif
@endsection

@if (isset($status))
    {{$status}}
@endif



@section('content')
@if (isset($dbselect))

@foreach($dbselect as $user)




<form action="/lessonQueryBuilder30-2/edit/{{$user->id}}" method="post">

    <lebel>Ваше имя</lebel>
    {{ csrf_field() }}

    <p><input type="text" name="name" placeholder="Ведите ваше имя"  value="{{$user->name}}"></p>
<lebel>Время</lebel>

    <p><input type="text" name="date" placeholder="Ведите ваше имя"  value="{{$user->date}}"></p>
    <lebel>Текст сообщения</lebel>

    <p><textarea rows="10" cols="45" name="massage" placeholder="Ведите ваше сообщения" >{{$user->massage}}</textarea></p>

    <input type="submit"  name="submit" value="Отправить">
</form>
@endforeach
@endif

@endsection