
<div {{ $attributes->merge(['class'=> '','other-attr'=> 'data-1']) }}>
    {{ $changeTitle() }}
    <div>
        <h1 class="text-2xl font-semibold">{{ $post->title }} </h1>
        <p class="text-xl font-semibold">{{ $post->description}} </p>
        <p>{{ $post->content}} </p>
    </div>
</div>
