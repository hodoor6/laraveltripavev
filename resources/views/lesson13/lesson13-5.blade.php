{{-- /// // Урок 13 Задача 5  Для указанного адреса выведите результат метода path.  --}}

<form method="GET" action="/lesson13-5/test/method/">
   <label>param:</label>
    <input type="text" name="param">
        <input type="submit">
</form>


@if(isset ($result ))
    <p> {{ $result }}</p>


@endif

@if(isset ($param))
    <p>$param = {{$param}}</p>
    <p>$path = {{$path}}</p>
@endif

