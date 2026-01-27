<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});


Route::get('/about', function () {
    return view('about', ['nama' => 'Chris Shuo', 'title' => 'About Page']);
});

// Route Blog Posts, sekaligus mempelajari tentang penerapan "Wild Card"
// Di halaman Blog Utama
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Chris Shuo',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores est, voluptates, nam error quas beatae, odit eos voluptate veniam recusandae numquam atque quidem at sint repellat. Perspiciatis debitis quia ab.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Suho Soull',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem laudantium vero, repellat ipsam neque consequatur eveniet tenetur vitae sint ipsum quibusdam ex quod error! Maxime ipsum ex distinctio corporis officia.'
        ]
    ]]);
});

// Di hal. Posts, pada hal. Blog kita pilih
Route::get('posts/{slug}', function($slug) {
    // dd($id);
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Chris Shuo',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores est, voluptates, nam error quas beatae, odit eos voluptate veniam recusandae numquam atque quidem at sint repellat. Perspiciatis debitis quia ab.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Suho Sou',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem laudantium vero, repellat ipsam neque consequatur eveniet tenetur vitae sint ipsum quibusdam ex quod error! Maxime ipsum ex distinctio corporis officia.'
        ]
    ];

    // Ingat: Var yg ditulis didlm sebuah function itu hanya bisa dipakai didalam function itu
    // Spy kita bisa gunakan, di PHP 8 bisa pakai use seperti dibawah ini. Dgn ini ia bisa ngecek globalnya
    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);

    // dd($post);
});

Route::get('/contact', function () {
    return view('contact', ['email' => 'shuo@email.com', 'github' => 'https://github.com/chrisshuo123'], ['title' => 'Contact Page']);
});