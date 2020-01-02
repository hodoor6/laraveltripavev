{{--// Урок 7 Задача 10 Выведите массив из предыдущей задачи в виде таблицы table.   --}}
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>My view</title>
</head>

<body>

<table border="1">
    <tr>
        <th>1</th>
        <th>2</th>
        <th>3</th>

    </tr>
@foreach ($data as $employee)
    <tr>
        <td>{{$employee['name']}}</td>
        <td> {{$employee['surname']}}</td>
        <td> {{$employee['salary']}}</td>

</tr>
                @endforeach

                            </table>

</body>
</html>
