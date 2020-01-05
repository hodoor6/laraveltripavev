@extends('lessonten.lessonten4')
{{--// Урок 10. Задача 4 В контроллере Post сделайте действие showOne, маршрут к которому будет следующий: /posts/:id/, где :id будет представлять собой номер поста в массиве $this->posts. Данное действие должно будет выводить запрошенный пост (все поля, кроме короткого описания).  --}}

@foreach($page as $key => $elem)
@section($key,$page[$key])
@continue($key == 'teaser')
@endforeach
