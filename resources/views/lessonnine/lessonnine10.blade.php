{{-- // Урок 9 Задача 10 Из действия в представление передается массив со строками. Сделайте из этого массива выпадающий список select.     .--}}
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
    <select name="" id="">
        @forelse($inputs as $input)

            <option value="{{$input}}">{{$input}}</option>



         

        @empty
            <p>В массиве нет элементов</p>

        @endforelse

    </select>


</main>
<footer>
    футер
</footer>
</body>
</html>