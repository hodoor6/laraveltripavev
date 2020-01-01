{{--//Урок 6 Задача 4 Пусть из действия в представление передается номер месяца. С помощью директив @if и @elseif определите пору года, в которую попадает переданный месяц. Если переданный номер не соответствует ни одному месяцу - выведите сообщение об этом.     --}}
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>My view</title>
</head>

<body>


@if ($month === '12' or $month  >= 1 and $month <= 2)
    <p>Зима</p>
@elseif($month  >= 3  and   $month <= 5)
    //<p>Весна</p>
@elseif($month >= 6 and  $month <= 8)
    <p>Лето</p>
@elseif($month >= 9 and  $month  <= 11)
    <p>Осень</p>
@else
    <p>Нет такого месяца</p>
@endif


</body>
</html>
