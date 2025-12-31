<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}
    <title>{{ $title }}</title>
</head>
<body class="h-full bg-gray-100">
    {{-- <a href="/">Home</a>
    <a href="/blog">Blog</a>
    <a href="/about">About</a>
    <a href="/contact">contact</a> --}}

    <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    <x-navbar></x-navbar> <!-- Ini artinya mengambil komponen yang nama filenya navbar.blade.php -->

    <x-header>{{ $title }}</x-header> <!-- Tulisan home page akan masuk ke dalam komponen utk menggantikan tulisan 'slot' yg ada di components/header.blade.php tsb -->

    {{-- Agar kita bisa menggunakan template keseluruhan halamannya diberbagai halaman, kita butuh yang namanya 'layout' --}}
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>
</body>
</html>