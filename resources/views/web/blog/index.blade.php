@extends('web.layout')

@section('content')
    <x-web.blog.post.index :posts="$posts">
        <h1 class="text-3xl mb-10">Listado principal de post </h1>

        @slot('header')
            <h1 class="text-3xl mb-10">Listado principal de post -- slot con nombre</h1>
        @endslot

        @slot('footer')
            <footer>
                Pie de página
            </footer>
        @endslot

        @slot('extra', 'Extra')


    </x-web.blog.post.index>
@endsection