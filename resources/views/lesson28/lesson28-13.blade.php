{{--//Урок 28. (laravel). Задача 12-1. Получите всех пользователей вместе с их странами--}}





<table border="1" width="800" align="center">
@foreach ($products as $elem)
<tr>
    <th colspan="2">{{ $elem -> name }}</th>
</tr>
@foreach ($elem -> cat as $el)
<tr>
    <td>{{ $el -> id }}</td>
    <td>{{ $el -> name }}</td>
</tr>
@endforeach
@endforeach
</table>

