{{--рок 28. (laravel). Задача 9-1. Получите всех пользователей вместе с их городами и странами этих городов.
--}}
<table border ="1" width="400" align="center">
    <tr>
        <th>id</th>
        <th>Пользователь</th>
        <th>Город</th>
        <th>Страна</th>

             </tr>
    @foreach($cities as $elem)
        <tr>
            <td>{{$elem->id}}</td>
            <td>{{$elem->login}}</td>
            <td>{{$elem->lesson28citie->name}}</td>
            <td>{{$elem->lesson28citie->lesson28countrie->name }}</td>
                    </tr>
    @endforeach

</table>