@props(['active' => false])

{{-- $attributes: Artinya, apapun yg ditulis didalam komponennya, itu akan di merge atau digabungkan kedalam componentnya, atau kedalam tag aslinya --}}
{{-- $slot: Untuk judul per tombol navbarnya, dimasukkan kedalam $slot ini --}}

{{-- <a {{ $attributes }} aria-current="page"
class="{{ request()->is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
aria-current="{{ request()->is('/') ? 'page' : false }}">{{ $slot }}</a> --}}

{{-- Pada bagian 'request()->is('/')' diatas, diganti menjadi '$active' --}}
<a {{ $attributes }} aria-current="page"
class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>