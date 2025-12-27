<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/about', function () {
    return view('about', ['nama' => 'Chris Shuo']);
});

// TUGAS: Buat 2 rute baru
// 1. /blog
// 2 buah artikel, judul dan isi (isi cukup 2 kalimat saja)
// 2. Contact
// ada email / social media

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact', ['email' => 'shuo@email.com', 'github' => 'https://github.com/chrisshuo123']);
});