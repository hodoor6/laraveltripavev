{{-- // Урок 16 Задача 2 Сделайте два действия. В первом действии покажите пользователю форму, в которой будет 5 инпутов для ввода чисел. После отправки формы сохраните ее данные в флеш сообщение описанным способом и выполните редирект на второе действие. Во втором действии найдите сумму переданных чисел и выведите ее в представлении действия. --}}
@if(isset($value))
    {{$value}}
    @endif

<form action="/lesson16-2/" method="get">

    <input type="number" name="number1" id="" placeholder="1" >
    <input type="number" name="number2" id="" placeholder="1" >
    <input type="number" name="number3" id="" placeholder="1" >
    <input type="number" name="number4" id="" placeholder="1" >
    <input type="number" name="number5" id="" placeholder="1" >
    <input type="submit" value="Отправить">
</form>

