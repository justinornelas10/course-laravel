@extends('web.layout')

@section('content')
    <x-alert class="mb-4" type="Error" :message="$post->description" data-id="medium" data-priority="medium" />
    <x-web.blog.post.show :post="$post" class="bg-red-100" other-attr="data-2"/>

    <h3>Dinámico</h3>
        <x-dynamic-component component='alert' type="Error" :message="$post->description" data-id="medium" data-priority="medium" />
        <x-dynamic-component component='web.blog.post.show' :post="$post" class="bg-red-100" other-attr="data-2" />
@endsection