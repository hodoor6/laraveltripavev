{{-- // Урок 13 Задача 1 Пусть в вашей форме есть произвольное количество инпутов. После отправки формы получите массив отправленных значений, отправьте его в представление и выведите эти данные в виде списка ul.
--}}

<form action="/lesson13-1" method="post">
    {{ csrf_field() }}
    <input type="number" name="number1" id="" value="25">
    <input type="number" name="number2" id="" value="40">
     <input type="submit" value="Отправить">
</form>


@if(isset ($result ))
    <p> {{ $result }}</p>
@endif
<ul>
@if(isset ($data ))
    @foreach($data as $key=>$elem)
            @continue($key == '_token')
    <li>{{$key}} - {{$elem}}</li>
        @endforeach
@endif

</ul>