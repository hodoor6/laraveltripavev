{{--//Урок 5. Задача 11  Пусть из действия в представление передаются переменные $year (год), $month (месяц) и $day (день). Сделайте так, чтобы, если какая-либо из этих переменных не задана, то вместо нее выведется текущее значение (текущий год, месяц или день). --}}

<!DOCTYPE html>
<html lang="ru">
<head>
    <title>My view</title>
</head>

<body>





<p>{{isset($year) ? $year : date('d') }}</p>
<p>{{isset($month) ? $month : date('m')}}</p>
<p>{{isset($day) ? $day : date('Y') }}</p>


</body>
</html>
