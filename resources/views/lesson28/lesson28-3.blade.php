{{--Урок 24. (laravel). Задача 4. Отредактируйте представление действия getAll так, чтобы появилась еще одна колонка со ссылкой на редактирование соответствующей статьи.    --}}
{{--// Урок 26. (laravel). Задача 6  Модифицируйте предыдущую задачу так, чтобы при редиректе отправлялось флеш сообщение об успешном обновлении записи. Выводите это сообщение в представлении действия getAll.--}}

@if (session()->has('status'))
<p> {{ session()->get('statusedit') }}</p>
@endif

@if (session()->has('delete'))
<p> {{ session()->get('delete') }}</p>
@endif

@if  (session()->has('idPost'))
<p>id статьи равен {{ session()->get('idPost')}}</p>
@endif

@if  (session()->has('title'))
    <p>Название статьи: {{ session()->get('title') }}</p>
@endif

<table border ="1" width="400" align="center">
    <tr>
        <th>№</th>
        <th>Логин</th>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Почта</th>
        <th>Пароль</th>
      </tr>
    @foreach($users as $elem)
        <tr>
            <td>{{$elem->id }}</td>
            <td>{{$elem->login }}</td>
            <td>{{$elem->lesson28profile->name}}</td>
            <td>{{$elem->lesson28profile->surname}}</td>
            <td>{{$elem->lesson28profile->email}}</td>
            <td>{{$elem->password}}</td>
        </tr>
    @endforeach

</table>