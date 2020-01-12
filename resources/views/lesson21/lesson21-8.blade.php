{{-- Урок 20. (laravel). Задача 8. Из таблицы employees получите работника с id, равным 3.       --}}

<table border ="1" width="400" align="center">
    <tr>
        <th>№</th>
        <th>Имя</th>
        <th>Дата рождения</th>
        <th>Должность</th>
        <th>Зарплата</th>

    </tr>
        <tr>
            <td>{{$user->id }}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->birthday}}</td>
            <td>{{$user->position}}</td>
            <td>{{$user->salary}}</td>
        </tr>

</table>
</table>