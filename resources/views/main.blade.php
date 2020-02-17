@extends('teamplate.shablon')
@section('content')
    @foreach($blogs as $blog)
        {{$blog['title']}}
        <br>
        {{$blog['content'] = mb_strimwidth($blog['content'], 0, 140, "...")}}
        <br>
        <a href="{{route('blog.show', $blog)}}">Перейти к статье</a>
        <a href="{{route('blog.red', $blog)}}">Редактировть статью</a>
        <a href="{{route('blog.del', $blog)}}">Удалить статью</a>
        <hr>
    @endforeach
    {{$blogs->links()}}
    <a href="/add">создать статью</a>
@endsection
