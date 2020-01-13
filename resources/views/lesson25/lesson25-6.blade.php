{{--Урок 25. (laravel). Задача 6. Отредактируйте представление действия getAll так, чтобы заголовок каждой из выводимых статей стал ссылкой на соответствующую страницу одной статьи.   --}}
<table border ="1" width="400" align="center">
    <tr>
        <th>№</th>
        <th>Pаголовок</th>
        <th>Короткое описание</th>
      </tr>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->id }}</td>
            <td><a href="/lesson25-5/post/{{$post->id}}/">{{$post->title}}</a></td>
            <td>{{$post->desc}}</td>

        </tr>

    @endforeach

</table>