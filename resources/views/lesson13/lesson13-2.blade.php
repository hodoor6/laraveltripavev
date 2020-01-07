{{-- // Урок 13 Задача 2 Пусть у нас будет форма, имитирующая регистрацию пользователя на сайте. Спросите с помощью этой формы у пользователя его имя, фамилию, email, желаемый логин, желаемый пароль (инпут с типом password). После отправки формы выведите на экран в виде списка ul все отправленные поля, кроме поля с паролем и email. Решите задачу сначала через except, а затем через only.
--}}

<form action="/lesson13-2" method="post">
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