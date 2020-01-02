{{--// Урок 7 Задача 12 Модифицируйте предыдущую задачу так, чтобы порядковый номер итерации начинался с 1.   --}}
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>My view</title>
</head>

<body>
<li>
@foreach ($data as $employee)
    <ul>
        {{$loop->iteration}}  - текущая итерация =>
        {{$employee['name']}}
         {{$employee['surname']}}
        {{$employee['salary']}}

</ul>
                @endforeach
</li>

</body>
</html>
