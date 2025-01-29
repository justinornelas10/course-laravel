@extends('dashboard.layout')

@section('content')
    <h1 class="text-2xl font-bold bg-blue-400 p-4">Title</h1>
    <h1>{{ $category->title }}</h1>
    <h1 class="text-2xl font-bold bg-blue-400 p-2">Posted</h1>
    <h2>{{ $category->slug }}</h2>
@endsection