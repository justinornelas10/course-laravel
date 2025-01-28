@extends('dashboard.layout')

@section('content')
    <h1>{{ $category->title }}</h1>
    <h2>{{ $category->slug }}</h2>
@endsection