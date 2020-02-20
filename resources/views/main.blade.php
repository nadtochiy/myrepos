@extends('teamplate.shablon')
@extends('teamplate.navbar')
@section('content')
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Домашняя страница</a>
            @else
                @if(Auth::check())
                    Вы в системе
                @endif
                @unless (Auth::check())
                    Вы не вошли в систему.
                @endunless
                <a href="{{ route('login') }}">Логин</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Регистрация</a>
                @endif
            @endauth
        </div>
    @endif
    @foreach($blogs as $blog)
       @include('teamplate.card')
    @endforeach
    <br>
    {{$blogs->links()}}
    <a class="btn btn-primary" href="/add">создать статью</a>
@endsection
