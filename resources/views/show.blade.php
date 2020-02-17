@extends('teamplate.shablon')
@section('content')
<h1>{{$blog['title']}}</h1>
<hr>
<p>{{$blog['content']}}</p>
<a href="/main">вернуться</a>
@endsection
