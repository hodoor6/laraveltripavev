{{-- // Урок 10 Задача 5   В контроллере Post сделайте действие showAll, маршрут к которому будет следующий: /posts/.

Данное действие должно показывать на экран список всех постов с их тайтлами и короткими описаниями, но без полного текста. Каждый пост должен иметь ссылку на свое полное описание (то есть на страницу действия showOne для этого поста).

Верстка информации об одном посте (она должна повторяться в цикле для каждого поста):  --}}
        <!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
<header>
    <h1>@yield('header')</h1>
</header>


<main>
        @yield('content')
    </main>
</body>
</html>