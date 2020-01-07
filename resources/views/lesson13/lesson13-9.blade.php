{{-- /// // Урок 13 Задача 9 Самостоятельно попробуйте поработать с методом is.   --}}

<form method="GET" action="/lesson13-9/test/method/">
   <label>param:</label>
    <input type="text" name="param">
        <input type="submit">
</form>


@if(isset ($result ))
    <p> {{ $result }}</p>


@endif

@if(isset ($param))
    <p>$param = {{$param}}</p>
    <p>$fullUrlWithQuery = {{$fullUrlWithQuery}}</p>
@endif

