{{--// Урок 12 Задача 2 Выведите на экран метод HTTP запроса.  --}}

<form action="/lessontwelve2/result" method="post">
    {{ csrf_field() }}
    <input type="number" name="number1" id="" value="25">
    <input type="number" name="number2" id="" value="40">
    <input type="number" name="number3" id="" value="40">
    <input type="submit" value="Отправить">
</form>
