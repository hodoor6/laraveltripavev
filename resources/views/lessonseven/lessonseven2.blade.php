{{--   // Урок 7 Задача 1 Передайте из действия в представление массив с числами. Выведите этот массив в виде списка ul.    --}}
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>My view</title>
</head>

<body>

<ul>
@foreach ($numbers as $number)
   <li>{{pow($number,2)}}</li>
@endforeach
</ul>

</body>
</html>
