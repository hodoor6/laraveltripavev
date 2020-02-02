{{--Другой подход--}}
{{--//Урок 30. (laravel). Задача 5.  Реализуйте сайт про города и страны. ---}}
{{--//--Модифицируйте предыдущую задачу так, чтобы на сайте появилась админка, в которой можно будет добавлять страны, города этих стран, достопримечательности и их описание.-Реализуйте добавление, редактирование и удаление. ----}}

@yield('sms')
<table border="1" align="center" width="500">
    <tr>
        <th>@php echo $title; @endphp</th>
    @yield('title')
    </tr>        
    @if ($a != 'text' and $a != '')
    @foreach ($country as $elem)
    <tr><td>
            @if ($a == 'country')
            <a href="/lesson30-5orm/{{ $name }}/{{ $elem -> id }}">{{ $elem -> name }}</a>
                @if ($name == 'admin')
                    <td><a href="/lesson30-5orm/update/{{ $elem -> id }}">Изменить</a></td>
                    <td><a href="/lesson30-5orm/delete/{{ $elem -> id }}">Удалить</a></td>
                @endif
            @endif
            @if ($a == 'city')
           <a href="/lesson30-5orm/{{ $name }}/{{ $id }}/{{ $elem -> id }}">{{ $elem -> name }}</a>
                @if ($name == 'admin')
                    <td><a href="/lesson30-5orm/update/{{ $id }}/{{ $elem -> id }}">Изменить</a></td>
                    <td><a href="/lesson30-5orm/delete/{{ $id }}/{{ $elem -> id }}">Удалить</a></td>
                @endif        
            @endif
            @if ($a == 'landmark')
            <a href="/lesson30-5orm/{{ $name }}/{{ $id }}/{{ $elem -> city_id }}/{{ $elem -> id }}">{{ $elem -> title }}</a>
                @if ($name == 'admin')
                    <td><a href="/lesson30-5orm/update/{{ $id }}/{{ $elem -> city_id }}/{{ $elem -> id }}">Изменить</a></td>
                    <td><a href="/lesson30-5orm/delete/{{ $id }}/{{ $elem -> city_id }}/{{ $elem -> id }}">Удалить</a></td>
                @endif       
            @endif
    </td></tr>
    @endforeach
    @endif
    @if ($a == 'text')
    <tr>
        <td>{{ $country -> text }}</td>
    </tr>
    @endif
</table>
@yield('form')