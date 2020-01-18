{{--Урок 28. (laravel). Задача 3. ОПолучите всех пользователей вместе с их профилями, передайте полученный массив в представление и выведите на экран в виде HTML таблицы table.     --}}

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