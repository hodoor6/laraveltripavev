{{-- // Урок 9 Задача 1  Сформируйте из нашего массива следующий HTML код:
<a href="http://href1">text1</a>
<a href="http://href2">text2</a>
<a href="http://href3">text3</a>
 --}}
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

    @forelse($main as $atribs)

        <a href="http://{{$atribs['href']}}">{{$atribs['text']}}</a>
<br/>
    @empty
        <p>В массиве нет элементов</p>

    @endforelse

</main>
<footer>
    футер
</footer>
</body>
</html>