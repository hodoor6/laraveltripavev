{{--   // Урок 7 Задача 5 Модифицируйте предыдущую задачу так, чтобы на выводе к ключу прибавлялась единица. .    --}}
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>My view</title>
</head>

<body>

<ul>
@foreach ($numbers as $key=>$number)
   <li>Ключ {{$key + 1 }} Значение {{pow($number,1/2)}}</li>
@endforeach
</ul>

</body>
</html>
