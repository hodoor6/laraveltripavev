
{{-- /// // Урок 13 Задача 8 С помощью метода fullUrlWithQuery добавьте к запрошенному URL GET параметр page со значением 1.   --}}

<form method="GET" action="/lesson13-8/test/method/">
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

