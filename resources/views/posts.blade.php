<x-layout>
    <x-slot name="content">
        @foreach ($posts as $post)
            <article class="{{ $loop->odd ? 'mb-6' : '' }}">
                <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
                <div>{!! $post->body !!}</div>
            </article>
        @endforeach
    </x-slot>
</x-layout>
