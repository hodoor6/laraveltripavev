{{-- // Урок 12 Задача 3 Если метод HTTP запроса - GET, то выведите на экран сообщение '!', а если POST, то сообщение '!!'.
--}}

<form action="/lessontwelve3/result" method="post">
    {{ csrf_field() }}
    <input type="number" name="number1" id="" value="25">
    <input type="number" name="number2" id="" value="40">
    <input type="number" name="number3" id="" value="40">
    <input type="submit" value="Отправить">
</form>
