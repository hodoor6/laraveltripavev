{{--{{Урок 20. (laravel). Задача 2. С помощью фасада DB получите всех юзеров, возраст которых более 18 лет. Передайте полученных юзеров в представление и выведите их в виде таблицы table.  --}}

<table border ="1" width="400" align="center">
    <tr>
        <th>№</th>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Возраст</th>
    </tr>


@foreach($users as $key=>$user)
       <tr>
      <td>{{$user->id }}</td>
        <td>{{$user->name}}</td>
       <td>{{$user->surname}}</td>
       <td>{{$user->age}}</td>
       </tr>

@endforeach

</table>