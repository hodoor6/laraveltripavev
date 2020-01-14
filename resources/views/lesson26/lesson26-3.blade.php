{{--Урок 26. (laravel). Задача 6. В контроллере PostController, созданном в предыдущем уроке, сделайте действие newPost для создания новой статьи. Пусть это действие будет доступно по адресу /post/new/. В представлении действия покажите форму для добавления новой записи. После отправки формы сохраните новую запись.  --}}





{{ $message }}
<form action="" method="POST">
    {{ csrf_field() }}
    <input type="text" name="title" placeholder="Заголовок" value="{{ $post->title}}"><br><br>
    <input type="date" name="date" placeholder="Дата публикации" value="{{ $post->date}}"><br><br>

    <textarea name="desc" placeholder="Краткий текст">{{$post->desc}}</textarea><br><br>

    <textarea name="text" placeholder="Основной текст">{{$post->text }}</textarea><br><br>
    <input type="submit" value="Добавить запись" name="start">
</form>