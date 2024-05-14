<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:header>{{ $header }}</x-slot:header>


    {{-- isi dari main --}}

    <article class="py-5 lg:text-left sm:text-auto text-center max-w-screen-md">
        <h2 class="mb-3 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        </a>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-1 font-light">
            {{ $post['body'] }}
        </p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to Posts </a>
    </article>

    {{-- end main --}}
</x-layout>
