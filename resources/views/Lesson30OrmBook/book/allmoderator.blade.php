{{--- другая Lesson30GuestBook - ORM --}}
{{--//Урок 30. (laravel). Задача 2.  Реализуйте модерирование сообщений гостевой книги. Пусть будет отдельная страница, на которой модератор видит список сообщений, а рядом с каждым сообщением - ссылку на удаление и ссылку на редактирование этого сообщения.- на, над списком сообщений выведите информационное сообщение о том, что сообщение пользователя успешно сохранено.--}}


<p align="center">{{ $text }}</p>
@yield('sms')
<table border="1" align="center" width="700">
    <tr>
        <th>Текст сообщения</th>
        <th>Автор</th>
        <th>Дата</th>
      @yield('update_1')
    </tr>
    @foreach ($messages as $elem)
    <tr>
        <td>{{ $elem -> text }}</td>
        <td>{{ $elem -> author -> name }}</td>
        <td>{{ $elem -> date }}</td>
        @yield('update_2')
        @if (isset($a))
        <td><a href="update/{{ $elem -> id }}">Изменить</a></td>
        <td><a href="delete/{{ $elem -> id }}">Удалить</a></td>
        @endif
    </tr>
    @endforeach
</table>
@yield('form')}