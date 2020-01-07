{{-- /// // Урок 13 Задача 4  Сделайте так, чтобы у вас было действие, которое будет срабатывать по следующему адресу: /test/method/. Перейдите по указанному адресу, но с GET параметром, например, так: /test/method?param=1. Решите все задачи ниже для данного адреса с GET параметром. --}}

<form method="GET" action="/lesson13-4/test/method/">
   <label>param:</label>
    <input type="text" name="param">
        <input type="submit">
</form>


@if(isset ($result ))
    <p> {{ $result }}</p>


@endif

@if(isset ($param))
    <p>$param = {{$param}}</p>
@endif

