@extends('app')
@section('content')
<div class="container">
    <h1 class="my-2">
        Edit Post
    </h1>
    <form action="{{ route('posts.update',$post->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-9">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
                </div>
            </div>
            <div class="col-9">
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" rows="3" name="content">{{ $post->content }}</textarea>
                </div>
            </div>
            <div class="col-9">
                <div class="form-group">
                    <label for="tags">Title</label>
                    <input type="text" class="form-control" id="tags" name="tags" value="{{ $post->tags }}">
                </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection