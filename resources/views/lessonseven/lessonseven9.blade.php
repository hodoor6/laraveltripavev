{{--// Урок 7 Задача 9 Передайте из действия в представление массив с работниками:  --}}
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>My view</title>
</head>

<body>

<li>


@foreach ($data as $key=> $employee)


        <ul>{{$employee['name']}} {{$employee['surname']}} {{$employee['salary']}}</ul>
<tr>

                @endforeach

</li>
</body>
</html>
