{{--Урок 24. (laravel). Задача 4. Отредактируйте представление действия getAll так, чтобы появилась еще одна колонка со ссылкой на редактирование соответствующей статьи.    --}}
{{--// Урок 26. (laravel). Задача 6  Модифицируйте предыдущую задачу так, чтобы при редиректе отправлялось флеш сообщение об успешном обновлении записи. Выводите это сообщение в представлении действия getAll.--}}

@if (session()->has('status'))
<p> {{ session()->get('statusedit') }}</p>
@endif

@if  (session()->has('idPost'))
<p>id статьи равен {{ session()->get('idPost')}}</p>
@endif

@if  (session()->has('title'))
    <p>Название статьи: {{ session()->get('title') }}</p>
@endif

<table border ="1" width="400" align="center">
    <tr>
        <th>№</th>
        <th>Заголовок</th>
        <th>Короткое описание</th>
        <th>Редактирование</th>
      </tr>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->id }}</td>
            <td><a href="/lesson25-5/post/{{$post->id}}/">{{$post->title}}</a></td>
            <td>{{$post->descs}}</td>
            <td><a href="/lesson26-3/{{$post->id}}/">Редактирование</a></td>
        </tr>
    @endforeach

</table>