
@extends('app')

@section('content')

<div class="container">
    <div class="my-2">
        <h2 class="text-success">
            Total no of post :{{ $posts->count()}}
        </h2>
    </div>
    <a href="{{ route('posts.index') }}" class="btn btn-primary" > View All Posts</a>
    <a href="{{route ('posts.create') }}" class="btn btn-primary" > Add New Post</a>
</div>

@endsection