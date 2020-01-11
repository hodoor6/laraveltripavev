{{--{{Урок 19. (laravel). Задача 2. Сделайте форму для загрузки файлов. Загрузите с ее помощью какой-нибудь текстовый файл. После загрузки выведите на экран текст загруженного файла. --}}



<form action="/lesson19-2" enctype="multipart/form-data" method="post">
    {{ csrf_field() }}

    <input type="file" name="file">
    <input type="submit">
</form>

