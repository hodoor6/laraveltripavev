{{--//Урок 5 Задача 14 Описанным способом выполните какой-нибудь PHP код.  --}}
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>My view</title>
</head>

<body>

<p>Строка { -- $str --}</p>
<p>Строка {{-- Этого комментария не будет в итоговом HTML --}}</p>
@php
 echo $test = '5 Урок Задание 14';
@endphp
</body>
</html>
