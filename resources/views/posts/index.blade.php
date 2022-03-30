@extends('app')

@section('content')
<div class="container">
    <h1 class="my-2"> All blog Posts</h1>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="table">
        <table class ="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>content</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td width="30%" class="text-center">
                        <a href="{{ route('posts.show',$post->id) }}" class="btn btn-info">show</a>
                        <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-warning">edit</a>
                        <form action="{{ route('posts.destroy',$post->id) }}" method="post">
                            @csrf
                            @method('Delete')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
</div>
@endsection