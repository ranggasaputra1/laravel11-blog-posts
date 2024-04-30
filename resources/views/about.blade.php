<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:header>{{ $title }}</x-slot:header>

    {{-- isi dari main --}}
    <h2>coba ini adalah bagian main dari halaman About</h2>
    <p>Name: {{ $name }}</p>
    {{-- end main --}}
</x-layout>
