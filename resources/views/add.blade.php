@extends('teamplate.shablon')
@section('content')
    <form method="post" action="/create">
        {{ csrf_field() }}
        <p>Введите название статьи :</p>
        <input type="text" name="title">
        <br>
        <p>Введите содержание статьи :</p>
        <input type="text" name="content">
        <hr>
        <input type="submit" name="Submit" value="Отправить">
    </form>
    <a href="/main">на главную</a>
@endsection
