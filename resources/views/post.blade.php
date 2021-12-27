<x-layout>
    <x-slot name="content">
        <article>
            <h2>{!! $post->slug !!}</h2>
            <div>{!! $post->body !!}</div>
            <a href="/">Go Back</a>
        </article>
    </x-slot>
</x-layout>


