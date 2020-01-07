{{-- /// // Урок 13 Задача 7 Для указанного адреса выведите результат метода fullUrl.  --}}

<form method="GET" action="/lesson13-7/test/method/">
   <label>param:</label>
    <input type="text" name="param">
        <input type="submit">
</form>


@if(isset ($result ))
    <p> {{ $result }}</p>


@endif

@if(isset ($param))
    <p>$param = {{$param}}</p>
    <p>$fullUrl = {{$fullUrl}}</p>
@endif

