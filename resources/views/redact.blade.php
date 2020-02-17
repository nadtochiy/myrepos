@extends('teamplate.shablon')
@section('content')
<form method="post" action="{{route('blog.change', $blog)}}">
    {{ csrf_field() }}
    <p>Измение название статьи :</p>
    <input type="text" name="title" value="{{$blog['title']}}">
    <br>
    <p>Измение содержание статьи :</p>
    <input type="text" name="content" value="{{$blog['content']}}">
    <hr>
    <input type="submit" name="Submit" value="Отправить">
</form>
    <a href="/main">на главную</a>
@endsection
