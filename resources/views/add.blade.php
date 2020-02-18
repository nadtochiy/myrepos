@extends('teamplate.shablon')
@section('content')
    <form method="post" action="/create">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleFormControlInput1">Название статьи</label>
            <input type="text" class="form-control" name="title" id="exampleFormControlInput1" value="{{old('title')}}">
            @error('title')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="form-group">
            <label for="exampleFormControlTextarea1">Содержание статьи</label>
            <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3">{{old('title')}}</textarea>
            @error('content')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <input class="btn btn-primary" type="submit" name="Submit" value="Отправить">
        <br>
        <br>
        <a class="btn btn-primary" href="/main">вернуться на главную</a>
    </form>
@endsection
