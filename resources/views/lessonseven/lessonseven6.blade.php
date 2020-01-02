{{--     //  Урок 7 Задача 6 Передайте из действия в представление массив с числами. Выведите этот массив в виде списка ul. Сделайте так, чтобы в список попадали только элементы, значениями которых служат четные числа.   --}}
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>My view</title>
</head>

<body>

<ul>
@foreach ($numbers as $key=>$number)
    @if(($number % 2)   == 0)
   <li> Значение {{$number}}</li>
        @endif
@endforeach
</ul>

</body>
</html>
