{{--// Урок 11 Задача 4 В каком-нибудь действии сделайте форму с тремя инпутами, в которые будут вводится числа. Отправьте эту форму на другое действие и выведите переданные числа в представлении этого действия. --}}


@if(empty($result))

<form action="/lessonleven4/result/" method="get">

    <input type="number" name="number1" id="" value="25">
    <input type="number" name="number2" id="" value="40">
    <input type="number" name="number3" id="" value="40">
    <input type="submit" value="Отправить">
</form>
@else
{{$result}}
@endif