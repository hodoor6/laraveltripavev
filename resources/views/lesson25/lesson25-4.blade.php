{{--Урок 25. (laravel). Задача 4. В контроллере PostController сделайте действие getOne для получения одной статьи по ее id. Пусть это действие будет доступно по адресу /post/:id/, где :id представляет собой id желаемой записи.  --}}

<table border ="1" width="400" align="center">
    <tr>
        <th>№</th>
        <th>Pаголовок</th>
        <th>Короткое описание</th>
      </tr>
          <tr>
            <td>{{$post['id'] }}</td>
            <td>{{$post['title']}}</td>
            <td>{{$post['desc']}}</td>

        </tr>
</table>