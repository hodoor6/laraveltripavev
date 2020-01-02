{{--// Урок 7 Задача 13 Модифицируйте предыдущую задачу так, чтобы для первой li добавлялся CSS класс first, а для последней - класс last.   --}}
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>My view</title>
</head>

<body>
<li>

                    @foreach ($data as $employee)

                       @if($loop->first)

                        <ul class="first">
                            {{$loop->iteration}}  - текущая итерация =>
                            {{$employee['name']}}
                            {{$employee['surname']}}
                            {{$employee['salary']}}

                        </ul>

            @elseif($loop->last)
            <ul class="last">
                {{$loop->iteration}}  - текущая итерация =>
                {{$employee['name']}}
                {{$employee['surname']}}
                {{$employee['salary']}}

            </ul>
              @else
            <ul>
                {{$loop->iteration}}  - текущая итерация =>
                {{$employee['name']}}
                {{$employee['surname']}}
                {{$employee['salary']}}
            </ul>
        @endif

    @endforeach
                </li>

</body>
</html>
