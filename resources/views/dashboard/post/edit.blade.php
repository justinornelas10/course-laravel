@extends('dashboard.layout')

@section('content')

    @include('dashboard/fragment/_errors-form')

    <form action="{{ route('post.update', $post->id) }}" method="POST">
        @method('PATCH')
        @include('dashboard/post/_form')
    </form>
@endsection