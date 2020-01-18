{{--Урок 28. (laravel). Задача 9-1. Получите всех пользователей вместе с их городами и странами этих городов.      --}}


<table border ="1" width="400" align="center">

        <tr>
            <th>id</th>
            <th>name</th>
            <th>city</th>
            <th>country</th>
        </tr>

        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->login }}</td>
            <td>{{ $user->city->name }}</td>
            <td>{{ $user->city->country->name }}</td>
        </tr>
        @endforeach
    </table>