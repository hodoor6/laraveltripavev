{{--// Урок 10. Задача 3 В контроллере Post сделайте действие showOne, маршрут к которому будет следующий: /posts/:id/, где :id будет представлять собой номер поста в массиве $this->posts. Данное действие должно будет выводить запрошенный пост (все поля, кроме короткого описания). --}}
        <!DOCTYPE html>
<html>
<head>
    <title>тайтл страницы</title>
</head>
<body>
<header>
    <h1>@yield('title')</h1>
</header>

{{var_dump($page)}}
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