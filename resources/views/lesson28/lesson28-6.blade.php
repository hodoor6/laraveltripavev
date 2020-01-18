{{--Урок 28. (laravel). Задача 6. Получите всех пользователей вместе с их городами, передайте полученный массив в представление и выведите на экран в виде HTML таблицы table.     --}}


<table border ="1" width="400" align="center">
    <tr>
        <th>№</th>
        <th>Логин</th>
        <th>Город</th>
        <th>Пароль</th>
             </tr>
    @foreach($users as $elem)
        <tr>
            <td>{{$elem->lesson28user->id }}</td>
            <td>{{$elem->lesson28user->login }}</td>
            <td>{{$elem->name}}</td>
            <td>{{$elem->lesson28user->password}}</td>
        </tr>
    @endforeach

</table>