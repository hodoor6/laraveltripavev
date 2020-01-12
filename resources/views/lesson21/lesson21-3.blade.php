{{--{{Урок 20. (laravel). Задача 3. Модифицируйте предыдущую задачу так, чтобы запрос получал только поле с именем и поле с зарплатой работника.   --}}

<table border ="1" width="400" align="center">
    <tr>
        <th>Имя</th>
        <th>Зарплата</th>

    </tr>
@foreach($users as $key=>$user)
       <tr>

        <td>{{$user->name}}</td>
       <td>{{$user->salary}}</td>

       </tr>

@endforeach

</table>