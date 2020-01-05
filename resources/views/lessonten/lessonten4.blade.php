{{-- // Урок 10 Задача 4 Модифицируйте предыдущую задачу так, чтобы если в адресную строку передан некорректный id поста, то пользователю показывалось следующее представление (сделать отдельным файлом): --}}
        <!DOCTYPE html>
<html>
<head>
    <title>тайтл страницы</title>
</head>
<body>
<header>
    <h1>@yield('title')</h1>
</header>


<main>
    <div class="info">
        <span class="date">@yield('date')</span><br>
        <span class="author">@yield('author')</span><br>
    </div>
    <div class="text">
        @yield('text')
    </div>
</main>
</body>
</html>