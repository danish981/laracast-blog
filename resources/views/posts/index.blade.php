<x-layout>

    @include('posts._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-posts-grid :posts="$posts" />

            <!-- will paginate through all the posts -->
            {{ $posts->links() }}
        @else
            <p class="text-center">No Posts Yet, Please Check back later</p>
        @endif

    </main>

</x-layout>

