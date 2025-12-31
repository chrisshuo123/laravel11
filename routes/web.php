<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});


Route::get('/about', function () {
    return view('about', ['nama' => 'Chris Shuo', 'title' => 'About Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        [
            'title' => 'Judul Artikel 1',
            'author' => 'Chris Shuo',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores est, voluptates, nam error quas beatae, odit eos voluptate veniam recusandae numquam atque quidem at sint repellat. Perspiciatis debitis quia ab.'
        ],
        [
            'title' => 'Judul Artikel 2',
            'author' => 'Chris Shuo',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem laudantium vero, repellat ipsam neque consequatur eveniet tenetur vitae sint ipsum quibusdam ex quod error! Maxime ipsum ex distinctio corporis officia.'
        ]
    ]]);
});

Route::get('/contact', function () {
    return view('contact', ['email' => 'shuo@email.com', 'github' => 'https://github.com/chrisshuo123'], ['title' => 'Contact Page']);
});