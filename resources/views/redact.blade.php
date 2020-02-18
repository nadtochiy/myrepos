@extends('teamplate.shablon')
@section('content')

    <form method="post" action="{{route('blog.change', $blog)}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleFormControlInput1">Название статьи</label>
            <input type="text" class="form-control" name="title" id="exampleFormControlInput1" value="{{$blog['title']}}">
            @error('title')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="form-group">
            <label for="exampleFormControlTextarea1">Содержание статьи</label>
            <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3">{{$blog['content']}}</textarea>
            @error('content')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <input class="btn btn-primary" type="submit" name="Submit" value="Отправить">
        <br>
        <br>
        <a class="btn btn-primary" href="/main">вернуться на главную</a>
    </form>

{{--<form method="post" action="{{route('blog.change', $blog)}}">
    {{ csrf_field() }}
    <p>Измение название статьи :</p>
    <input type="text" name="title" value="{{$blog['title']}}">
    <br>
    <p>Измение содержание статьи :</p>
    <input type="text" name="content" value="{{$blog['content']}}">
    <hr>
    <input type="submit" name="Submit" value="Отправить">
</form>
    <a href="/main">на главную</a>--}}
@endsection
