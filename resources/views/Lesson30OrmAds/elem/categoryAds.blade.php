{{--//  -другой Lesson30Ads - ORM--}}
{{--//Урок 30. (laravel). Задача 3.  Реализуйте доску объявлений.--}}
{{--//На главной странице нашего сайта должен быть список рубрик объявлений.--}}
{{--//По заходу на определенную рубрику должен выводится список объявлений из данной рубрики. Пусть объявления сортируются по убыванию даты. //Под списком объявлений сделайте форму, с помощью которой можно будет оставить новое объявление.--}}

@extends('Lesson30OrmAds.layouts.Ads')
@section('title')
   Категория {{$categoryAds->name}}
   <p align="center">{{Session::get('ok')}}</p>
   <p align="center">{{Session::get('tel')}}</p>
@endsection
@section('content')
    <p align="center">{{Session::get('sms')}}</p>

<form action="/lessonorm30-3/ads/{{$categoryAds->id}}" method="get">
    {{ csrf_field() }}
    <lebel>Ваше имя</lebel>
    <p><input type="text" name="name" placeholder="Ведите ваше имя" value="{{old('name')}}"></p>

    <lebel>Телефон</lebel>

    <p><input type="text" name="phone" placeholder="8-123-123-4567" value="{{old('phone')}}"></p>

    <lebel>Текст объявления</lebel>

    <p><textarea  style="width: 300px; height: 100px"  rows="10" cols="45" name="text" placeholder="Ведите ваше сообщения">{{old('text')}}</textarea></p>

    <input type="submit" name="submit" value="Отправить">
</form>
            @if(isset($categoryAdsUsers))

<table border="1"        align="center" width="600">

    <tr>
        <th>№</th>
        <th>Текст объявления</th>
        <th>Автор и Контакты</th>
                <th>Дата</th>
    </tr>
           @foreach($categoryAdsUsers as $Ads )
        @if ($loop -> first)
            <tr>
                <th colspan="6">{{ $Ads-> category -> name }}</th>
            </tr>
            <tr>
        @endif
                <td>{{$loop->iteration}}</td>
                       <td style="width: 400px">{{$Ads->text}}</td>
                <td  style="text-align: right">Автор - {{$Ads->user->name}}:  </br>Tel.: - <a href="tel:+{{$Ads->user->phone}}">{{$Ads->user->phone}}</a></td>
            <td>{{$Ads->date}}</td>
        <tr>
            @endforeach
    <tr>
        <td colspan="6" align="right"><a href="/lessonorm30-3/">вернуться</a></td>
    </tr>

</table>
            <p align="center">{{ Session::get('sms') }}</p>
            <table border="1" align="center" width="600">
                @foreach (  $categoryAdsUsers as $elem)
                    @if ($loop -> first)
                        <tr>
                            <th colspan="2">{{ $elem -> category -> name }}</th>
                        </tr>
                    @endif
                    <tr>
                        <td>{{ $elem -> text }}<br><div style="text-align: right">{{ $elem -> user -> name }}: Tel.: {{ $elem -> user -> phone }}</div></td>
                        <td>{{ $elem -> date }}</td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="2" align="right"><a href="/category">вернуться</a></td>
                </tr>
            </table>
@endif
@endsection