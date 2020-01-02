{{--// Урок 7 Задача 8  Передайте из действия в представление массив с числами от 1 до 25. Выведите его в виде таблицы 5 на 5. <!DOCTYPE html>--}}
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
        <th>4</th>
        <th>5</th>
    </tr>
@foreach ($number as$key=> $numb)


<tr>


@foreach ($numb as $key=>$td)
        <td>{{$td}}</td>

                @endforeach
</tr>
                @endforeach

                            </table>

</body>
</html>
