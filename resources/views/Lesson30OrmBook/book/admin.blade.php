{{--другая----//Lesson30GuestBook - ORM -
--//Урок 30. (laravel). Задача 2.  Реализуйте модерирование сообщений гостевой книги. Пусть будет отдельная страница, на которой модератор видит список сообщений, а рядом с каждым сообщением - ссылку на удаление и ссылку на редактирование этого сообщения.--}}

@extends ('Lesson30OrmBook.book.allmoderator')
@section('sms')
<p align="center">{{ Session::get('sms') }}</p>
@endsection
@section('update_1')
<th>Редактирование</th>
<th>Удаление</th>
@endsection
{{ $elem = '' }}
@section('update_2')
@php $a = 'qwerty'; @endphp
@endsection