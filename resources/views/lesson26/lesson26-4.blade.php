{{--Урок 24. (laravel). Задача 4. Отредактируйте представление действия getAll так, чтобы появилась еще одна колонка со ссылкой на редактирование соответствующей статьи.    --}}
<table border ="1" width="400" align="center">
    <tr>
        <th>№</th>
        <th>Pаголовок</th>
        <th>Короткое описание</th>
        <th>Редактирование</th>
      </tr>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->id }}</td>
            <td><a href="/lesson25-5/post/{{$post->id}}/">{{$post->title}}</a></td>
            <td>{{$post->desc}}</td>
            <td><a href="/lesson26-3/{{$post->id}}/">Редактирование</a></td>
        </tr>
    @endforeach

</table>