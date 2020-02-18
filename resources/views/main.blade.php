@extends('teamplate.shablon')
@extends('teamplate.navbar')
@section('content')
    @foreach($blogs as $blog)
       @include('teamplate.card')
    @endforeach
    <br>
    {{$blogs->links()}}
    <a class="btn btn-primary" href="/add">создать статью</a>
@endsection
