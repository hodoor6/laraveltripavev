{{-- // Урок 14 Задача 1 В одном действии контроллера установите какое-нибудь значение в сессию, а во втором - получите его.
--}}


@if(isset ($value))
    <p>Значение сесии {{ $value }}</p>
@endif
