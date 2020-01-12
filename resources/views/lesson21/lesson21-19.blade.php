{{--{{Урок 20. (laravel). Задача 19. Из таблицы events получите мероприятия, у которых дата начала и дата конца приходится на один и тот же день.  --}}

<table border ="1" width="450" align="center">
    <tr>
        <th>№</th>
        <th>Название</th>
        <th>Начало мероприятия</th>
        <th>Конец мероприяти</th>
    </tr>
@foreach($events as $key=>$user)
       <tr>
      <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
       <td>{{$user->start}}</td>
       <td>{{$user->finish}}</td>
           </tr>
@endforeach
</table>