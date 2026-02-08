<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});


Route::get('/about', function () {
    return view('about', ['nama' => 'Chris Shuo', 'title' => 'About Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => Post::all()]);
});

// Di hal. Posts, pada hal. Blog kita pilih
Route::get('posts/{post}', function(Post $post) { // slug ganti ke posts
    // Kita tidak lagi perlu pencarian secara manual disini
    // $post = Post::find($slug);
    // Laravelnya otomatis tahu bahwa yang diambil adalah post.  Contoh kita tulis angka 1 didalam {post}, Laravel akan langsung cari "ada nda post yang angka id nya 1?"  Kalau ada kirim langsung ke bawah ini yang $post.
    
    return view('post', ['title' => 'Single Post', 'post' => $post]);

    // dd($post);
});

Route::get('/contact', function () {
    return view('contact', ['email' => 'shuo@email.com', 'github' => 'https://github.com/chrisshuo123'], ['title' => 'Contact Page']);
});