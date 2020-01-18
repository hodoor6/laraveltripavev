{{--//Урок 28. (laravel). Задача 12-1. Получите всех пользователей вместе с их странами--}}



<table border ="1" width="400" align="center">

        <tr>
            <th>Все пользователи</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
        </tr>


    @foreach ($user ->Lesson28countryManyThrough as $el)
            <tr>
        <td colspan="2">{{ $el -> login }}</td>
            </tr>
        @endforeach
        @endforeach
    </table>