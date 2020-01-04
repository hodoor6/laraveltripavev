{{--// Урок 7 Задача 15 Самостоятельно попробуйте работу изученных директив.    --}}
        <!DOCTYPE html>
<html lang="ru">
<head>
    <title>My view</title>
</head>


<body>
<ul>

    @forelse($number as $numb)

        <p><i> <b>{{$numb}}</b></i></p>



@empty

{{'Нет ничего'}}

@endforelse

</body>
</html>
