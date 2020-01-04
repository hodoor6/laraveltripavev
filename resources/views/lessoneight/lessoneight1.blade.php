{{-- // Урок 8 Задача 1 Сделайте данную верстку макетом вашего сайта так, чтобы в тег main загружались представления действий контроллеров.
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
    @yield('content')

</main>
<footer>
    футер
</footer>
</body>
</html>