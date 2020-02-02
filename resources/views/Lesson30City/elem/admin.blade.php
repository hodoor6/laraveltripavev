{{--//Урок 30. (laravel). Задача 5.  Реализуйте сайт про города и страны. --}}
{{--Модифицируйте предыдущую задачу так, чтобы на сайте появилась админка, в которой можно будет добавлять страны, города этих стран, достопримечательности и их описание.--}}
{{--Реализуйте добавление, редактирование и удаление. --}}

@extends('Lesson30City.layouts.siteSight')
@section('title')
    {{$title}}
    {{Session::get('ok')}}
@endsection

@section('content')
    <table border="1"
           align="center"
           width="100%">
        <tr>
            <th>№</th>
            <th>Страны</th>
            <th>Города</th>
            <th>Достопримечательность</th>
            <th>Адрес</th>
            <th width="400">Описание</th>
            <th>Дата публикации</th>
            <th>Добавить</th>
            <th>Рекатировать</th>
            <th>Удалить</th>
        </tr>

        @foreach($showplaces as $showplace)

            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$showplace->country->country}}</td>
                <td>{{$showplace->city->city}}</td>

                <td>{{$showplace->title}}</td>
                <td>{{$showplace->address}}</td>
                <td width="400">{{$showplace->description}}</td>
                <td>{{$showplace->date}}</td>
                <td><a href="/lesson30-5/admin/add/">Добавить</a></td>
                <td><a href="/lesson30-5/admin/edit/{{$showplace->id}}/">Редактировать</a></td>
                <td><a href="/lesson30-5/admin/delete/{{$showplace->id}}/">Удалить</a></td>
            </tr>


        @endforeach
        <tr>
            <td colspan="9" align="right" ><a href="/lesson30-5/admin/add/">Добавить новую достопримечательность</a></td>
            <td colspan="9" align="right" ><a href="/lesson30-4/">Вернуться на сайт</a></td>
            </tr>
@endsection
