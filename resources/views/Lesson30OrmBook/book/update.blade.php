{{--//Lesson30GuestBook - ORM - другая--}}
{{--//Урок 30. (laravel). Задача 2.  Реализуйте модерирование сообщений гостевой книги. Пусть будет отдельная страница, на которой модератор видит список сообщений, а рядом с каждым сообщением - ссылку на удаление и ссылку на редактирование этого сообщения.--}}

<p align="center">Автор сообщения: <i>{{ Session::get('name') }}</i></p>
<p align="center"><i>{{ Session::get('sms') }}</i></p>
<form action="" method="POST" align="center">
    {{ csrf_field() }}
    <textarea name="text" placeholder="Текст сообщения" style="width: 300px; height: 100px">{{ Session::get('text') }}{{ old('text') }}</textarea><br><br>
    <input name="start" type="submit" value="Изменить">
</form>