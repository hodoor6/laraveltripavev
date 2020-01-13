{{--{{Урок 25. (laravel). Задача 3. Используя модель Post, созданную в предыдущем уроке для таблицы posts, получите в действии getAll массив всех статей, передайте его в представление и выведите циклом на экран в виде HTML таблицы с колонками id, title (заголовок) и desc (то есть без текста статьи).  --}}
<table border ="1" width="400" align="center">
    <tr>
        <th>№</th>
        <th>Pаголовок</th>
        <th>Короткое описание</th>
      </tr>
    @foreach($posts as $key=>$post)
        <tr>
            <td>{{$post['id'] }}</td>
            <td>{{$post['title']}}</td>
            <td>{{$post['desc']}}</td>

        </tr>

    @endforeach

</table>