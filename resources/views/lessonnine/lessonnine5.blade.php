{{-- // Урок 9 Задача 5  Модифицируйте предыдущую задачу так, чтобы появилась еще одна колонка в начале таблицы, в которой будут выводится порядковые номера работников (то есть ключи элементов массива). Нумерация должна начинаться с единицы, а не с нуля.  .--}}
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
<tr>

    <td>{{$loop->iteration}}</td>
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