{{-- // Урок 13 Задача 3 Самостоятельно попробуйте получить данные из формы, передав при этом два параметра в ваш маршрут. --}}

<form action="/lesson13-3/{{$id}}/{{$page}}" method="post">
    {{ csrf_field() }}
    <input type="text" name="name" id="" value="Имя">
    <input type="text" name="surmame" id="" value="Фамилию">
    <input type="email" name="email" id="" value="email">
    <input type="text" name="login" id="" value="Логин">
    <input type="password" name="password" id="" value="Пароль">
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
<ul>
@if(isset ($except  ))
    @foreach($except as $key=>$elem)
            @continue($key == '_token')
    <li>{{$key}} - {{$elem}}</li>
        @endforeach
@endif

</ul>

<p>Переданные параметры:</p>
<p>$id = {{$id}}</p>
<p>$page = {{$page}}</p>