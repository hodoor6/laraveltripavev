{{--{{Урок 20. (laravel). Задача 9. Из таблицы employees получите работника имя работника id, равным 5.     --}}

<table border ="1" width="400" align="center">
    <tr>
        <th>Имя</th>
          </tr>
    @foreach($users as $id => $name)
        <tr>
             <td>{{$id}}</td>
            <td>{{$name}}</td>
                   </tr>
    @endforeach

</table>