@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($blogs as $blog)
            @include('teamplate.card')
        @endforeach
        <br>
        <a class="btn btn-primary" href="/add">создать статью</a>
    </div>
@endsection
