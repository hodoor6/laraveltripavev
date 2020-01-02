{{--// Урок 7 Задача 11 Из действия в представление передается массив со строками. Выведите элементы этого массива в виде списка ul. Сделайте так, чтобы перед значением элемента, выводился еще и порядковый номер итерации, начиная с 0.   --}}
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>My view</title>
</head>

<body>
<li>
@foreach ($data as $employee)
    <ul>
        {{$loop->index}}  - текущая итерация =>
        {{$employee['name']}}
         {{$employee['surname']}}
        {{$employee['salary']}}

</ul>
                @endforeach
</li>

</body>
</html>
