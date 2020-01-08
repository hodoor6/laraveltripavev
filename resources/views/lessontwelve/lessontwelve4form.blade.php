{{-- // Урок 12 Задача 4 Сделайте форму, которая будет спрашивать у пользователя два числа с помощью двух инпутов. После отправки формы методом POST выведите на экран сумму введенных чисел. Пусть и форма, и результат показываются одним действием.
--}}

<form action="/lessontwelve4" method="post">
    {{ csrf_field() }}
    <input type="number" name="number1" id="" value="25">
    <input type="number" name="number2" id="" value="40">
    <input type="submit" value="Отправить">
</form>
@if(isset ($sumNumber))
    <p>Cумма чисел = {{ $sumNumber }}</p>
@endif

@if(isset ($result ))
    <p> {{ $result }}</p>
@endif