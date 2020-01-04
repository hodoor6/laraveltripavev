{{-- // Урок 9 Задача 9 Из действия в представление передается массив со строками. Переберите этот массив циклом и в каждой итерации цикла создайте инпут, сделав значением инпута элемент массива..     .--}}
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

        @forelse($inputs as $input)
            <input type="text" name="test" id="test" value="{{$input}}">

         
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