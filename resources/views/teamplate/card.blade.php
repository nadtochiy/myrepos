<div class="card">
    <div class="card-body">
        <h5 class="card-title"> <a href="{{route('blog.show', $blog)}}">{{$blog['title']}}</a></h5>
        <p class="card-text">{{$blog['content'] = mb_strimwidth($blog['content'], 0, 140, "...")}}</p>
        <a href="{{route('blog.red', $blog)}}" class="btn btn-primary">Редактировть статью</a>
        <a href="{{route('blog.del', $blog)}}" class="btn btn-danger">Удалить статью</a>
    </div>
</div>
