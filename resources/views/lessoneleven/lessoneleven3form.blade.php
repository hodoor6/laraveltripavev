{{--// Урок 11 Задача 3Сделайте форму с двумя инпутами, в которые будут вводится числа. После отправки формы выведите на экран сумму этих чисел, а форму уберите. --}}


@if(empty($result))

<form action="" method="get">

    <input type="number" name="number1" id="" value="25">
    <input type="number" name="number2" id="" value="40">
    <input type="submit" value="Отправить">
</form>
@else
{{$result}}
@endif