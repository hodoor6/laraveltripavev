{{--///QueryBuilder--}}


{{--//Урок 30. (laravel). Задача 1. Реализуйте гостевую книгу. Гостевая книга должна представлять собой страницу, на которую может зайти любой желающий и оставить свое сообщение.--}}

{{--Пусть по заходу на эту страницу выводится список всех оставленных ранее сообщений, отсортированных по убыванию даты. Пусть выводится текст сообщения, имя автора и дата создания сообщения.--}}

{{--Под сообщениями пусть расположена форма, в которой можно оставить сообщение. Пусть в форме будет инпут для ввода имени и текстареа для ввода сообщения.--}}

{{--После того, как форма будет отправлена, над списком сообщений выведите информационное сообщение о том, что сообщение пользователя успешно сохранено.--}}

@extends('Lesson30GuestBookQueryBuilder.layouts.GuestBook')
@section('title')

@if (session('status'))
    {{session('status')}}
@endif
@endsection


@section('content')
@if (isset($alldata))
    <table border="1"
           align="center"
            width="400">
   <tr>
       <th>№</th>
       <th>Сообщение</th>
       <th>Имя</th>
       <th>Дата</th>
    </tr>
        @foreach($alldata as $massage)



        <tr>
       <td>{{$massage->id}}</td>
            <td>{{$massage->massage}}</td>
            <td>{{$massage->name}}</td>
       <td>{{$massage->date}}</td>

    </tr>
        @endforeach
    </table>

@endif


@if (isset($status))
    {{$status}}
@endif

<form action="/lessonQueryBuilder30-1" method="post">
    {{ csrf_field() }}
    <lebel>Ваше имя</lebel>

    <p><input type="text" name="name" placeholder="Ведите ваше имя" ></p>

    <lebel>Текст сообщения</lebel>

    <p><textarea rows="10" cols="45" name="massage" placeholder="Ведите ваше сообщения"></textarea></p>

    <input type="submit"  name="submit" value="Отправить">
</form>
@endsection
