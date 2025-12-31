<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    @foreach($posts as $post)
    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <a href="/posts/{{ $post['id'] }}" class="hover:underline">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | 31 Desember 2025
        </div>
        <p class="my-4 font-light">{{ Str::limit($post['body'], 100) }}</p>
        <a href="/posts/{{ $post['id'] }}" class="font-medium text-blue-500 hover:underline" href="#">Read More &raquo;</a>
    </article>
    @endforeach
    {{-- <h1 class="text-5xl mb-2">Halaman Blog</h1>
    <p class="mb-6">Welcome to my Blog!</p>
    <article class="mb-4">
        <h3 class="text-2xl">Mengapa Mr. Bean Lucu sampai tahun ini?</h3>
        <p>Karena Mr. Bean itu terlalu Wildd</p>
    </article>

    <article class="mb-4">
        <h3 class="text-2xl">Siapa Pengemudi Mobil Biru di film Mr. Bean?</h3>
        <p>Kemungkinan besar adalah tetangganya Mr. Bean yang paling ia benci</p>
    </article>  --}}
</x-layout>