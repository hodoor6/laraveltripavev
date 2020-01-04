{{-- // Урок 9 Задача 7 Выведите этот массив в виде HTML таблицы с тремя колонками: имя, фамилия и статус. В последней колонке должен выводится статус пользователя: забанен он или нет. Если ключ banned для данного пользователя имеет значение true, то выводите слово 'забанен', а если false, то слово 'активен'.    .--}}
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
        <th>Статус</th>
    </tr>
    @forelse($users as $key=>$user)

            @if(!$user['banned'])
                <tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$user['name']}}</td>
    <td>{{$user['surname']}}</td>
    <td>Активен</td>

       @else
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