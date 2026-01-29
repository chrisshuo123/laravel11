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

// Route Blog Posts, sekaligus mempelajari tentang penerapan "Wild Card"
// Di halaman Blog Utama
// Pada branch 'part4_model', seluruh array posts dipindah ke dalam class Post dengan method all
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => Post::all()]);
});

// Di hal. Posts, pada hal. Blog kita pilih
Route::get('posts/{slug}', function($slug) {
    // Pada branch 'part4_model', param dgn $posts dirubah ke 'Post::all'. Panggil class dan methodnya.  var $post telah dipindah ke dalam Models\Post.php, karna hal2 yg berhubungan dgn ngerubah isi (kyk id jadi slug), harus dilakukan pada model scr prinsip.
    $post = Post::find($slug);

    return view('post', ['title' => 'Single Post', 'post' => $post]);

    // dd($post);
});

Route::get('/contact', function () {
    return view('contact', ['email' => 'shuo@email.com', 'github' => 'https://github.com/chrisshuo123'], ['title' => 'Contact Page']);
});