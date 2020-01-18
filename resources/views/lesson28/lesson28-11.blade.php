{{--Урок 28. (laravel). Задача 11. Получите все страны вместе с их городами.       --}}


<table border ="1" width="400" align="center">

        <tr>
            <th>country</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
        </tr>
          @foreach ($user ->lesson28countrieMany as $el)
        <td>{{ $el -> name }}</td>
        @endforeach
        @endforeach
    </table>