{{--//Lesson30GuestBook - ORM--другая}}
{{--//Урок 30. (laravel). Задача 1. Реализуйте гостевую книгу. Гостевая книга должна представлять собой страницу, на которую может зайти любой желающий и оставить свое сообщение.--}}

{{--Пусть по заходу на эту страницу выводится список всех оставленных ранее сообщений, отсортированных по убыванию даты. Пусть выводится текст сообщения, имя автора и дата создания сообщения.--}}

{{--Под сообщениями пусть расположена форма, в которой можно оставить сообщение. Пусть в форме будет инпут для ввода имени и текстареа для ввода сообщения.--}}

{{--После того, как форма будет отправлена, над списком сообщений выведите информационное сообщение о том, что сообщение пользователя успешно сохранено.--}}
{{--{{dump($messages)}}--}}
{{--{{dump($text)}}--}}

<p align="center">{{ $text }}</p>
<table border="1" align="center" width="700">
    <tr>
        <th>Текст сообщения</th>
        <th>Автор</th>
        <th>Дата</th>
    </tr>
    @foreach ($messages as $elem)
    <tr>

        <td>{{ $elem -> text }}</td>
        <td>{{ $elem ->Author->name }}</td>
        <td>{{ $elem -> created_at}}</td>
    </tr>
    @endforeach
</table>
<br>
<br>
<p align="center">{{ Session::get('sms') }}</p>
<form action="" method="POST" align="center">
    {{ csrf_field() }}
    <input name="name" type="text" placeholder="Ваше имя" value="{{ old('name') }}"><br><br>
    <textarea name="text" placeholder="Текст сообщения" style="width: 300px; height: 100px">{{ old('text') }}</textarea><br><br>
    <input name="start" type="submit">
</form>
