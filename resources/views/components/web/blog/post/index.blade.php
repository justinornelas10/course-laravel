<div>
    
    {{ $slot }}

    {{ $header}}



    @foreach ($posts as $p)
        <div class="card card-white p-4">
            <h2 class="text-xl font-semibold">{{ $p->title }}</h2>
            <h3>{{ $p->description }}</h3>
            <a href="{{ route("web.blog.show",$p)}}" class="text-blue-300 hover:underline">Ir</a>
        </div>
    @endforeach

    {{ $extra }}

    {{ $posts->links() }}


    {{ $footer }}
</div>