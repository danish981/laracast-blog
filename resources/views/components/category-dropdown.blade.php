<x-dropdown>
    <!-- trigger -->
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;" />
        </button>
    </x-slot>
    <x-dropdown-item href="/">All</x-dropdown-item>

    <!-- drop down items -->
    @foreach ($categories as $category)
        <!-- we can use these :active too in x-dropdown-item, read out them -->
        {{-- :active="isset($currentCategory) && $currentCategory->is($category)" --}}
        {{-- :active='request()->is("/*/{$category->slug}")' --}}
        <x-dropdown-item href="?category={{ $category->slug }}"
            :active='request()->is("/categories/{$category->slug}")'>
            {{ ucwords($category->name) }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>
