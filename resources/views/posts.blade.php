<x-layout>

    @include('_posts-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        <!-- big one featured article -->
        <x-post-featured-card />

        <!-- TWO articles side by side -->
        <div class="lg:grid lg:grid-cols-2">
            <x-post-card />
            <x-post-card />
        </div>

        <!-- THREE articles side by side -->
        <div class="lg:grid lg:grid-cols-3">
            <x-post-card />
            <x-post-card />
            <x-post-card />
        </div>

    </main>






    {{-- @foreach ($posts as $post)
            <article>
                <h2>
                    <a href="/posts/{{ $post->slug }}">
                        {{ $post->title }}
                    </a>
                </h2>
                <p>
                    By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in
                    <a href="/categories/{{ $post->category->slug }}">
                        {{ $post->category->name }}
                    </a>
                </p>
                <div>
                    {!! $post->excerpt !!}
                </div>
            </article>
        @endforeach --}}





</x-layout>
