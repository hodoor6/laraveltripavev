{{--Урок 28. (laravel). Задача 6. Получите всех пользователей вместе с их городами, передайте полученный массив в представление и выведите на экран в виде HTML таблицы table.     --}}


<table border ="1" width="400" align="center">
    <tr>
        <th>Город</th>
        <th>Страна</th>

             </tr>
    @foreach($cities as $elem)
        <tr>
            <td>{{$elem->name}}</td>
            <td>{{$elem->Lesson28countrie->name }}</td>
                    </tr>
    @endforeach

</table>