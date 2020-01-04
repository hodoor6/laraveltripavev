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


</aside>
<main>
    {{$main}}
    @section('main')
        <p>Это содержимое тела страницы.</p>
    @endsection
</main>
<footer>
    футер
</footer>
</body>
</html>