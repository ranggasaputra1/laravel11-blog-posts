<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:header>{{ $header }}</x-slot:header>

    {{-- isi dari main --}}

    @foreach ($posts as $post)
        <article class="py-5 lg:text-left sm:text-auto text-center max-w-screen-md">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="mb-3 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
            </a>
            <div> By
                <a href="/authors/{{ $post->author->username }}"
                    class="hover:underline text-base text-gray-500">{{ $post->author->name }}</a> in
                <a href="/categories/{{ $post->category->id }}"
                    class="hover:underline text-base text-gray-500">{{ $post->category->name }}</a> |
                {{ $post->created_at->diffForHumans() }}
            </div>
            <p class="my-1 font-light">
                {{ Str::limit($post['body'], '150') }}
            </p>
            <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more
                &raquo;</a>
        </article>
    @endforeach

    {{-- end main --}}
</x-layout>
