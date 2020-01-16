{{--// Урок 27. (laravel). Задача 4. Сделайте действие getDeletedPost, выводящее список удаленных статей.--}}
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

    <h1>Cписок удаленных статей</h1>
    <tr>
        <th>№</th>
        <th>Заголовок</th>
        <th>Короткое описание</th>
        <th>Востановление</th>

      </tr>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->id }}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->desc}}</td>
            <td><a href="/lesson27-6/restorePost/{{$post->id}}/">Востановление</a></td>

        </tr>
    @endforeach

</table>