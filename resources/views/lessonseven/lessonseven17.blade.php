{{--// Урок 7 Задача 17 С помощью цикла $@for выведите 10 абзацев, заполненных числами от 1 до 10.     --}}
        <!DOCTYPE html>
<html lang="ru">
<head>
    <title>My view</title>
</head>


<body>


    @for($i = 0; $i < count($number) ; $i++)

        <p><i> <b>{{$number[$i]}}</b></i></p>



@endfor

    <ul>
        @for ($i = 1; $i <= 10; $i++)
            <p>
                @for ($j = 1; $j <= 10; $j++)
                    {{ $j }}
                @endfor
            </p>
        @endfor
    </ul>

</body>
</html>
