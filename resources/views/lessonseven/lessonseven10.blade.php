{{--// Урок 7 Задача 9 Передайте из действия в представление массив с работниками:  --}}
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>My view</title>
</head>

<body>

{{--<table border="1">--}}
{{--    <tr>--}}
{{--        <th>1</th>--}}
{{--        <th>2</th>--}}
{{--        <th>3</th>--}}
{{--       --}}
{{--    </tr>--}}
<li>


@foreach ($data as $key=> $employee)


        <ul>{{$employee['name']}} {{$employee['surname']}} {{$employee['salary']}}</ul>
<tr>

{{--@foreach ($employee as $key=>$td)--}}
{{--        <td>{{$td}}</td>--}}

{{--                @endforeach--}}
{{--</tr>--}}
                @endforeach

{{--                            </table>--}}
</li>
</body>
</html>
