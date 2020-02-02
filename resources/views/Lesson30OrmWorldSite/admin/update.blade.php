{{--Другой подход--}}
{{--//Урок 30. (laravel). Задача 5.  Реализуйте сайт про города и страны. ---}}
{{--//--Модифицируйте предыдущую задачу так, чтобы на сайте появилась админка, в которой можно будет добавлять страны, города этих стран, достопримечательности и их описание.-Реализуйте добавление, редактирование и удаление. ----}}

@extends('Lesson30OrmWorldSite.layouts.allcountry')
@section('sms')
<p align="center">{{ Session::get('message') }}</p>
@endsection
@if ($place != '1010')
@section('title')
<th>Редактировать</th>
<th>Удалить</th>
@endsection
@section('form')
<br>
<br>
<p align="center">{{ Session::get('sms') }}</p>
<form action="" method="POST" align="center">
    {{ csrf_field() }}
    <input name="name" type="text" placeholder="{{ $place }}" value="{{ old('name') }}"><br><br>
    @if ($a == 'landmark')
      <textarea name="text" placeholder="Основной текст" style="width: 300px; height: 100px">{{ old('text') }}</textarea><br><br>
    @endif
    <input name="start" type="submit" value="Добавить">
</form>
@endsection
@endif