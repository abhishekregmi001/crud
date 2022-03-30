@extends('app')

@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="container">
    <h1 class="my-3">{{ $post->title }}</h1>
    <p> {{ $post->content }}</p>
    <p>Tags:{{ $post->tags }}</p>
</div>
@endsection