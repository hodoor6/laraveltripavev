{{-- - другая Lesson30GuestBook - ORM --}}
{{--//Урок 30. (laravel). Задача 2.  Реализуйте модерирование сообщений гостевой книги. Пусть будет отдельная страница, на которой модератор видит список сообщений, а рядом с каждым сообщением - ссылку на удаление и ссылку на редактирование этого сообщения.--}}

@extends ('Lesson30OrmBook.book.allmoderator')
@section('form')
<br>
<br>
<p align="center">{{ Session::get('sms') }}</p>
<form action="" method="POST" align="center">
    {{ csrf_field() }}
    <input name="name" type="text" placeholder="Ваше имя" value="{{ old('name') }}"><br><br>
    <textarea name="text" placeholder="Текст сообщения" style="width: 300px; height: 100px">{{ old('text') }}</textarea><br><br>
    <input name="start" type="submit">
</form>
@endsection
