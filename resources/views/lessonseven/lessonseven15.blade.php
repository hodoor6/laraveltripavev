{{--// Урок 7 Задача 16 Самостоятельно попробуйте работу цикла @forelse.     --}}
        <!DOCTYPE html>
<html lang="ru">
<head>
    <title>My view</title>
</head>


<body>
<ul>

    @foreach ($number as $numb)


       @if($numb ==3)
@continue
@endif
        <p><i> <b>{{$numb}}</b></i></p>
        @if($numb==5)
            @break
        @endif
@endforeach
</ul>
        @foreach ($number as $numb)

            @continue($numb <5)

            <p><i> <b>{{$numb}}</b></i></p>

@break($numb >=8)

@endforeach


</body>
</html>
