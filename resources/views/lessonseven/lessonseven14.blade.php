{{--// Урок 7 Задача 14 Из действия в представление передается массив с числами. Выведите каждый элемент этого массива в своем теге b. С помощью $loop->remaining три последних элемента массива выведите не в теге b, а в теге i.    --}}
        <!DOCTYPE html>
<html lang="ru">
<head>
    <title>My view</title>
</head>

<body>
<li>
    @foreach ($number as $numb)

        @if($loop->remaining <=2)

            <p><i> <b>{{$numb}}</b></i></p>

        @else

            <p><b>{{$numb}}</b></p>
@endif

@endforeach


</body>
</html>
