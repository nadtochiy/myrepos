@extends('teamplate.shablon')
@section('content')
    <h1>{{$blog->title}}</h1>
    <hr>
    <p>{{$blog->content}}</p>
    <p>{{$blog->created_at}}</p>
    {{$blog->user->name}}
    <a href="/main">вернуться</a>
@endsection
