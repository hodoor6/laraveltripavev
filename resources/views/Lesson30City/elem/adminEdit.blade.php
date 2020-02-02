{{--//Урок 30. (laravel). Задача 5.  Реализуйте сайт про города и страны. --}}
{{--Модифицируйте предыдущую задачу так, чтобы на сайте появилась админка, в которой можно будет добавлять страны, города этих стран, достопримечательности и их описание.--}}
{{--Реализуйте добавление, редактирование и удаление. --}}

@extends('Lesson30City.layouts.siteSight')

@section('title')
    {{$title}}
    <p align="center">{{Session::get('ok')}}</p>

@endsection

@section('content')
    <h3><p align="center">{{Session::get('cityCheck')}}</p></h3>
    <h3><p align="center">{{Session::get('checkCityInCountry')}}</p></h3>
    <h3><p align="center">{{Session::get('sms')}}</p></h3>

    <form action="/lesson30-5/admin/edit/{{$showplace->id}}" method="get">
        {{ csrf_field() }}
        <p align="left">{{Session::get('countryCheck')}}</p>
        <lebel>Страна</lebel>
        <p><input type="text" name="country" size="30" placeholder="Ведите страну"
                  value="@if(!empty(old('country'))){{old('country')}}@else{{$showplace->country->country}}@endif"></p>
       <p align="left">{{Session::get('cityCheck')}}</p>
        <lebel>Город</lebel>
        <p><input type="text" name="city" size="30" placeholder="Ведите город"
                  value="@if(!empty(old('city'))){{old('city')}}@else{{$showplace->city->city}}@endif"></p>

        <lebel>Достопримечательность</lebel>
        <p><input type="text" name="title" size="42" placeholder="Ведите названия мероприятия"
                  value="@if(!empty(old('title'))){{old('title')}}@else{{$showplace->title}}@endif"></p>

        <lebel>Адрес</lebel>

        <p><input type="text" name="address" size="30" placeholder="Ведите адрес" value="@if(!empty(old('address'))){{old('address')}}@else{{$showplace->address}}@endif"></p>

        <lebel>Описание</lebel>

        <p><textarea style="width: 300px; height: 100px" rows="10" cols="45" name="description"
                     placeholder="Ведите описание мероприятия">@if(!empty(old('description'))){{old('description')}}@else{{$showplace->description}}@endif</textarea></p>

        <input type="submit" name="submit" value="Отправить">
    </form>

@endsection
