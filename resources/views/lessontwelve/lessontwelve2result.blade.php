{{--// // Урок 12 Задача 2 Выведите на экран метод HTTP запроса. .--}}

@if(isset($result))
{{$result}}
@else
    <p>Первое число = {{ $number1 }}</p>
    <p>Второе число = {{ $number2 }}</p>
    <p>Третье число = {{ $number3 }}</p>
@endif