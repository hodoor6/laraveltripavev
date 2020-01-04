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
<ul>
    @forelse($main as $atribs)

      <li>  <a href="http://{{$atribs['href']}}">{{$atribs['text']}}</a></li>

    @empty
        <p>В массиве нет элементов</p>

    @endforelse
</ul>
</main>
<footer>
    футер
</footer>
</body>
</html>