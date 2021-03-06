{{--Урок 27. (laravel). Задача 2.  Отредактируйте представление действия getAll так, чтобы появилась еще одна колонка со ссылкой на удаления соответствующей статьи.
После удаления выполняйте редирект обратно на список статей с флеш сообщением об успешном удалении статьи. Сообщение должно содержать title удаленной статьи. --}}


@if (session()->has('status'))
<p> {{ session()->get('statusedit') }}</p>
@endif

@if (session()->has('delete'))
<p> {{ session()->get('delete') }}</p>
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
        <th>Удаление</th>
      </tr>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->id }}</td>
            <td><a href="/lesson25-5/post/{{$post->id}}/">{{$post->title}}</a></td>
            <td>{{$post->desc}}</td>
            <td><a href="/lesson26-3/{{$post->id}}/">Редактирование</a></td>
            <td><a href="/lesson27-2/post/del/{{$post->id}}/">Удаление</a></td>
        </tr>
    @endforeach

</table>