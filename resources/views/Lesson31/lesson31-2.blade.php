{{--//Урок 31. (laravel). Задача 2. Модифицируйте предыдущую задачу так, чтобы пользователи выводились по 10 штук на страницу.--}}

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

<table align="center">
   <tr>
      <td>{{ $users->links() }}</td>
   </tr>
</table>
<style>
   .pagination li{
      list-style-type: none;
      float: left;
      margin-left: 10px;
   }
</style>