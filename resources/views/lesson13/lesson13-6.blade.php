{{-- /// // Урок 13 Задача 6  Для указанного адреса выведите результат метода url.   --}}

<form method="GET" action="/lesson13-6/test/method/">
   <label>param:</label>
    <input type="text" name="param">
        <input type="submit">
</form>


@if(isset ($result ))
    <p> {{ $result }}</p>


@endif

@if(isset ($param))
    <p>$param = {{$param}}</p>
    <p>$url = {{$url}}</p>
@endif

