@extends('lessonten.lessonten5')
{{--// Урок 10. Задача 5  В контроллере Post сделайте действие showAll, маршрут к которому будет следующий: /posts/.

Данное действие должно показывать на экран список всех постов с их тайтлами и короткими описаниями, но без полного текста. Каждый пост должен иметь ссылку на свое полное описание (то есть на страницу действия showOne для этого поста).

Верстка информации об одном посте (она должна повторяться в цикле для каждого поста): --}}

@section('title','Cписок страниц')
@section('header','Cписок страниц')

@section('content')
    @foreach($page as $key =>$Onepage)

       <div class="post">
           <h2>тайтл страницы ->>{{$Onepage['title']}} </h2>
           <div class="info">
		<span class="date">
			->> {{$Onepage['date']}}</span>
               <span class="author">
			->> {{$Onepage['author']}}</span>
           </div>
           <div class="text">
                ->> {{$Onepage['teaser']}}
           </div>
           <div class="more">
               <a href="/lessonten4/posts/{{$key}}">ссылка
                   на пост</a>
           </div>
       </div>


    @endforeach
@endsection
