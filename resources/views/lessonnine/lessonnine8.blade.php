{{-- // Урок 9 Задача 8 Модифицируйте предыдущую задачу так, чтобы цвет текста tr с забаненным пользователем был красного цвета, а с активным пользователем - зеленого.     .--}}
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

    @php
    $colorTrue = 'green';
    $colorFalse = 'red';
    @endphp
    <table border="1" width="300" align="center" style="text-align: center">
    <tr>
        <th>N</th>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Статус</th>
    </tr>
    @forelse($users as $key=>$user)

            @if(!$user['banned'])
                <tr style="color:{{$colorTrue }}">
    <td>{{$loop->iteration}}</td>
    <td>{{$user['name']}}</td>
    <td>{{$user['surname']}}</td>
    <td>Активен</td>

       @else
                <tr style="color:{{$colorFalse }}">
                    <td>{{$loop->iteration}}</td>
                    <td>{{$user['name']}}</td>
                    <td>{{$user['surname']}}</td>
                    <td>Забанен</td>

                    @endif
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