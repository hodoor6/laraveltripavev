{{-- // // Урок 8 Задача 4 Вынесите хедер и футер сайта в отдельные подшаблоны. Разместите их в папке elems. Подключите их к основному макету.
 --}}
        <!DOCTYPE html>
<html>
<head>
    <title> @yield('title')</title>
</head>
<body>
<header>
    @yield ('elems.header')

    @section('header')

    @show
</header>
<aside>
    сайдбар
               @section('aside')
        <p>Область на которую воздействует парент </p>
              <p>Это главная боковая панель.</p>
    @show
</aside>
<main>
    @yield('content').<br>

</main>
<footer>

    @section('footer')

    @show
</footer>
</body>
</html>