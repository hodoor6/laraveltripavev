{{--//Урок 31. (laravel). Задача 1. Пусть в базе данных есть таблица с пользователями. Выведите список всех пользователей (пока без пагинации) в виде HTML таблицы.--}}

<table border="1" width="200" align="center">
<tr>
<th>№</th>
<th>Имя</th>
</tr>

@foreach ($users as $user)
      <tr>
   <td>{{$user->id}}</td>
   <td>{{$user->user}}</td>
      </tr>
@endforeach
</table>