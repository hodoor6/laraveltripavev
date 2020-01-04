{{-- // Урок 9 Задача 3  Выведите этот массив в виде следующей таблицы: .--}}
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

    @forelse($employees as $employee)
<tr>

    <td>{{$employee['name']}}</td>
    <td>{{$employee['surname']}}</td>
    <td>{{$employee['salary']}}</td>

</tr>


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