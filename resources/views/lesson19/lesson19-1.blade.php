{{-- // Урок 18 Задача 2 С помощью формы спросите у пользователя дату рождения. Запишите ее в куки. При заходе на сайт, если сегодня День Рождения пользователя, поздравьте его с этим праздником.   --}}


{{$data}}

<form action="/lesson19-1" enctype="multipart/form-data" method="post">
    {{ csrf_field() }}

    <input type="file" name="file">
    <input type="submit">
</form>

