{{--///QueryBuilder--}}

{{--//Урок 30. (laravel). Задача 2.  Реализуйте модерирование сообщений гостевой книги. Пусть будет отдельная страница, на которой модератор видит список сообщений, а рядом с каждым сообщением - ссылку на удаление и ссылку на редактирование этого сообщения.--}}


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
       <th>Редактировать</th>
       <th>Удалить</th>
    </tr>
        @foreach($alldata as $massage)



        <tr>
       <td>{{$massage->id}}</td>
            <td>{{$massage->massage}}</td>
            <td>{{$massage->name}}</td>
       <td>{{$massage->date}}</td>

       <td><a href="/lessonQueryBuilder30-2/edit/{{$massage->id}}">Редактировать</a></td>
       <td><a href="/lessonQueryBuilder30-2/delete/{{$massage->id}}">Удалить</a></td>

    </tr>
        @endforeach
    </table>

@endif
@endsection



