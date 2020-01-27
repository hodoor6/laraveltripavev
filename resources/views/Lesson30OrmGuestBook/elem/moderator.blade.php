{{--//Lesson30GuestBook - ORM--}}

{{--//Урок 30. (laravel). Задача 2.  Реализуйте модерирование сообщений гостевой книги. Пусть будет отдельная страница, на которой модератор видит список сообщений, а рядом с каждым сообщением - ссылку на удаление и ссылку на редактирование этого сообщения.--}}


@extends('Lesson30OrmGuestBook.layouts.GuestBook')
@section('title')
@if (session('status'))
    {{session('status')}}
@endif
@endsection

@section('content')

@section('content')
    @if (isset($authors))
        <table border="1"
               align="center"
               width="400">
            <tr>
                <th>№</th>
                <th>Сообщение</th>
                <th>Имя</th>
                <th>Дата</th>
            </tr>
            @foreach($authors as $author)
                <tr>
                    @foreach($author->message as $massage)

                        <td>{{$author->id}}</td>
                        <td>{{$massage->text}} id -- {{$massage->id}}</td>
                        <td>{{$author->name}}</td>
                        <td>{{$massage->date}}</td>
                        <td><a href="/lessonorm30-2/edit/{{$massage->id}}/{{$author->id}}">Редактировать</a></td>
                        <td><a href="/lessonorm30-2/delete/{{$massage->id}}">Удалить</a></td>
                </tr>
            @endforeach
            @endforeach
        </table>

    @endif

@endsection



