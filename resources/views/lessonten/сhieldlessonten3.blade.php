@extends('lessonten.lessonten3')
{{--// Урок 10. Задача 3 В контроллере Post сделайте действие showOne, маршрут к которому будет следующий: /posts/:id/, где :id будет представлять собой номер поста в массиве $this->posts. Данное действие должно будет выводить запрошенный пост (все поля, кроме короткого описания). --}}


@foreach($page as $key => $elem)
@continue($key == 'teaser')
@section($key,$page[$key])
@endforeach