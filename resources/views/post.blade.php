<x-layout>
    <x-slot name="content">
        <article>

            <h2>
                {!! $post->slug !!}
            </h2>

            <p>
                <a href="/categories/{{ $post->category->slug }}">
                    {{ $post->category->name }}
                </a>
            </p>

            <div>
                {!! $post->body !!}
            </div>

            <a href="/">Go Back</a>

        </article>
    </x-slot>
</x-layout>
