{{--     //  Урок 7 Задача 7 Из действия в представление передается переменная $data. Эта переменная может содержать массив с числами либо быть обычным числом. Если переменная $data - массив, то выведите элементы этого массива в виде списка ul, а если переменная $data - число, то выведите это число в абзаце.   --}}
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>My view</title>
</head>

<body>


    @if(is_array($data))
        <ul>
@foreach ($data as $key=>$number)

   <li> Значение {{$number}}</li>

@endforeach
</ul>
@endif

    @if(is_numeric($data))
        <ul>


    {{$data}}


</ul>
@endif

</body>
</html>
