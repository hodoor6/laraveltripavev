{{-- // Урок 16 Задача 3 Пусть у вас есть какая-то форма. Сделайте так, чтобы значения не пропадали из этой формы после отправки. --}}
{{$value}}

</br>
</br>
<form action="/lesson16-3/" method="get">

    <input type="number" name="number1" id="" placeholder="1" value="{{ old('number1') }}">
    <input type="number" name="number2" id="" placeholder="1" value="{{ old('number2') }}">
    <input type="number" name="number3" id="" placeholder="1" value="{{ old('number3') }}">
    <input type="number" name="number4" id="" placeholder="1" value="{{ old('number4') }}">
    <input type="number" name="number5" id="" placeholder="1" value="{{ old('number5') }}">
    <input type="submit" value="Отправить">
</form>

