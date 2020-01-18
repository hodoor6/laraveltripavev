{{--Урок 28. (laravel). Задача 11. Получите все страны вместе с их городами.       --}}


<table border ="1" width="400" align="center">

        <tr>
            <th>country</th>
        </tr>
        @foreach($cityes as $city)
        <tr>
            <td>{{ $city->name }}</td>
        </tr>
          @foreach ($city ->lesson28countrieMany as $el)
        <td>{{ $el -> name }}</td>
        @endforeach
        @endforeach
    </table>