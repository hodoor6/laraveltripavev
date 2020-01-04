{{-- // Урок 9 Задача 6  Модифицируйте предыдущую задачу так, чтобы на экран выводились только работники с зарплатой более 2000.   .--}}
        <!DOCTYPE html>
<html>
<head>
    <title>Тайтл страницы</title>
</head>
<body>
<header>
    хедер
</header>
<aside>
    сайдбар

</aside>
<main>

    <table border="1" width="300" align="center" style="text-align: center">
    <tr>
        <th>N</th>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Зарплата</th>
    </tr>
    @forelse($employees as $key=>$employee)
            @if($employee['salary'] > 2000)
                <tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$employee['name']}}</td>
    <td>{{$employee['surname']}}</td>
    <td>{{$employee['salary']}}</td>

</tr>
@endif

    @empty
        <p>В массиве нет элементов</p>

    @endforelse

    </table>

</main>
<footer>
    футер
</footer>
</body>
</html>