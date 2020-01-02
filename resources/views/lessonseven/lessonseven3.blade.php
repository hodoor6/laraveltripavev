{{--   // Урок 7 Задача 2 Модифицируйте предыдущую задачу так, чтобы в пункты списка выводились квадраты элементов массива.     --}}
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
