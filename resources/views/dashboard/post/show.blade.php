@extends('dashboard.layout')

@section('content')
    <h1 class="text-2xl font-bold bg-blue-400 p-4">Title</h1>
    <h1>{{ $post->title }}</h1>

    <h1 class="text-2xl font-bold bg-blue-400 p-2">Posted</h1>
    <span>{{ $post->posted }}</span>
    
    <h1 class="text-2xl font-bold bg-blue-400 p-2">Description</h1>
    <div>
        {{ $post->description }}
    </div>
    <h1 class="text-2xl font-bold bg-blue-400 p-2">Content</h1>
    <div>
        {{ $post->content }}
    </div>

    <h1 class="text-2xl font-bold bg-blue-400 p-2">Image</h1>
    <img src="/uploads/posts/{{ $post->image}}" alt="{{ $post->title}}" style="width:250px">
    <span>{{ $post->image }}</span>
@endsection