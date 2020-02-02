{{--Другой подход--}}
{{--//Урок 30. (laravel). Задача 5.  Реализуйте сайт про города и страны. ---}}
{{--//--Модифицируйте предыдущую задачу так, чтобы на сайте появилась админка, в которой можно будет добавлять страны, города этих стран, достопримечательности и их описание.-Реализуйте добавление, редактирование и удаление. ----}}
<p align="center">{{ Session::get('sms') }}</p>
        @if (old('text') or old('name'))
            @php $place = ''; $name = ''; @endphp
        @endif
<form action="" method="POST" align="center">
    {{ csrf_field() }}
    <input name="name" type="text" value="{{ old('name') }}{{ $name }}"><br><br>
    @if ($a == 'landmark')
      <textarea name="text" style="width: 300px; height: 100px">{{ old('text') }}{{ $place }}</textarea><br><br>
    @endif
    <input name="start" type="submit" value="Изменить">
</form>