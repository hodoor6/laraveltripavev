{{--//  -другой Lesson30Ads - ORM--}}
{{--//Урок 30. (laravel). Задача 3.  Реализуйте доску объявлений.--}}
{{--//На главной странице нашего сайта должен быть список рубрик объявлений.--}}
{{--//По заходу на определенную рубрику должен выводится список объявлений из данной рубрики. Пусть объявления сортируются по убыванию даты. //Под списком объявлений сделайте форму, с помощью которой можно будет оставить новое объявление.--}}
<table border="1" align="center" width="500">
    <tr>
        <th>@php echo $title; @endphp</th>
    </tr>
    @if ($a != 'text')
    @foreach ($country as $elem)
    <tr><td>

            @if ($a == 'country')
            <a href="/lesson30-4orm/country/{{ $elem -> id }}">{{ $elem ->country}}</a>
            @elseif ($a == 'city')
            <a href="/lesson30-4orm/country/{{ $id }}/{{ $elem -> id }}">{{ $elem -> city }}</a>

            @endif
            @if ($a == 'landmark')
            <a href="/lesson30-4orm/country/{{ $id }}/{{ $elem -> city_id }}/{{ $elem -> id }}">{{ $elem -> title }}</a>
            @endif
        </td></tr>
    @endforeach
    @endif
    @if ($a == 'text')
    <tr>
        <td>{{ $country ->description }}</td>
    </tr>
    @endif
</table>