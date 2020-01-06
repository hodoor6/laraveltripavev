{{--// Урок 12 Задача 1 Сделайте два действия. В представлении первого действия покажите форму, которая будет отправляться на второе действие методом POST. Выведите данные, отправленные через форму, в представлении второго действия. --}}

<form action="/lessontwelve1/result" method="post">
    {{ csrf_field() }}
    <input type="number" name="number1" id="" value="25">
    <input type="number" name="number2" id="" value="40">
    <input type="number" name="number3" id="" value="40">
    <input type="submit" value="Отправить">
</form>
