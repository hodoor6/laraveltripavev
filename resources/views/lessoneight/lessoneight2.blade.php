{{-- // Урок 8 Задача 2 Сделайте так, чтобы каждое действие отправляло в представление переменную $title, содержащую тайтл страницы. Модифицируйте код предыдущей задачи так, чтобы переданный тайтл попадал в тег title макета сайта.
 --}}
        <!DOCTYPE html>
<html>
<head>
    <title> @yield('title')</title>
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