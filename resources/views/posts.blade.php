<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:header>{{ $header }}</x-slot:header>

    {{-- isi dari main --}}
    <article class="py-8 lg:text-left sm:text-auto text-center max-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">Judul Artikel 1</h2>
        <div class="text-base text-gray-500">
            <a href="#">Rangga Saputra</a> | 5 Mei 2024
        </div>
        <p class="my-4 font-light">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad a nemo aliquam quis veniam adipisci nostrum
            atque quo. Ea, modi earum corporis facere officiis cum fuga minima molestiae aperiam sunt.
        </p>
        <a href="#" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
    </article>

    <article class="py-8 lg:text-left sm:text-auto text-center max-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">Judul Artikel 2</h2>
        <div class="text-base text-gray-500">
            <a href="#">Rangga Saputra</a> | 5 Mei 2024
        </div>
        <p class="my-4 font-light">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id velit et quis blanditiis tenetur. Sequi neque,
            ex, repellendus necessitatibus impedit, ipsa tempore architecto explicabo dicta iusto dolore officiis nobis
            alias!
        </p>
        <a href="#" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
    </article>
    {{-- end main --}}
</x-layout>
