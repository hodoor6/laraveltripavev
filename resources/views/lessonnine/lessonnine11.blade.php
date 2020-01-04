{{-- // Урок 9 Задача 11 Сделайте в действии контроллера массив с числами от 1 до последнего дня текущего месяца. Передайте этот массив в представление. Сделайте также переменную, в которой будет хранится номер текущего дня. Также передайте эту переменную в представление.

Переберите циклом переданный массив и выведите его в виде списка ul. При этом тегу li, в котором хранится номер текущего дня месяца добавьте класс active.      .--}}
        <!DOCTYPE html>
<html>
<head>
    <style>
             .active{
            background-color:yellow;
        }
    </style>
    <title>Тайтл страницы</title>
</head>
<body>
<header>
    хедер
</header>
<aside>
    сайдбар

</aside>
<main>
<ul>


{{var_dump ($dayyys = (date('d', time())))}}
{{var_dump(range(1, $dayyys))}}



        @forelse($days as $day)

            @if ($day == $todayDay)

            <li class="active">{{$day}}</li>
                @else
          <li>{{$day}}</li>
        @endif

         
            <br/>
        @empty
            <p>В массиве нет элементов</p>

        @endforelse

</ul>

</main>
<footer>
    футер
</footer>
</body>
</html>