{{--//Lesson30GuestBook - ORM--}}

{{--//Урок 30. (laravel). Задача 2.  Реализуйте модерирование сообщений гостевой книги. Пусть будет отдельная страница, на которой модератор видит список сообщений, а рядом с каждым сообщением - ссылку на удаление и ссылку на редактирование этого сообщения.--}}
@extends('Lesson30OrmGuestBook.layouts.GuestBook')
@section('title')
    @if (session('status'))
        {{session('status')}}
    @endif
@endsection

@if (isset($status))
    {{$status}}
@endif



@section('content')


    {{--    {{var_dump($dbselectauthor)}}--}}
{{--       {{dump($dbselect->name)}}--}}
{{--     @foreach($dbselect as $message)--}}
{{--         {{var_dump($message)}}--}}
{{--     @endforeach--}}


{{-- @if (isset($dbSelectMessage) and isset($dbSelectAuthor))--}}





 <form action="/lessonorm30-2/edit/{{$dbSelectMessage['id'
 ]}}/{{$dbSelectMessage['author_id']}}" method="post">
     <lebel>Ваше имя</lebel>
     {{ csrf_field() }}
     <p><input type="text" name="name" placeholder="Ведите ваше имя"  value="{{$dbSelectAuthor['name']}}"></p>


 <lebel>Время</lebel>

     <p><input type="text" name="date" placeholder="Ведите ваше имя"  value="{{$dbSelectMessage['date']}}"></p>
     <lebel>Текст сообщения</lebel>

     <p><textarea rows="10" cols="45" name="message" placeholder="Ведите ваше сообщения" >{{$dbSelectMessage['text'
 ]}}</textarea></p>

     <input type="submit"  name="submit" value="Отправить">
 </form>

{{-- @endif--}}

 @endsection