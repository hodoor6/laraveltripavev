{{--//Урок 5. Задача 10 Пусть из действия в представление передается массив $location (местоположение) с ключами country (страна), city (город). Выведите каждый элемент это массива в отдельном абзаце. Сделайте так, чтобы, если не задана страна, то по умолчанию вывелась Россия, а если не задан город, то по умолчанию вывелась Москва.  --}}

<!DOCTYPE html>
<html lang="ru">
<head>
    <title>My view</title>
</head>

<body>






<p>{{$location['country'] ? $location['country']  :'Россия'}}</p>
<p>{{isset($location['city']) ? $location['city'] : 'Москва'}}</p>


</body>
</html>
