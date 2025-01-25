@extends('dashboard.layout')

@section('content')
    <h1>{{ $post->title }}</h1>
    <span>{{ $post->posted }}</span>

    <div>
        {{ $post->description }}
    </div>
    <div>
        {{ $post->content }}
    </div>

    <img src="/uploads/posts/{{ $post->image}}" alt="{{ $post->title}}" style="width:250px">
    <span>{{ $post->image }}</span>
@endsection