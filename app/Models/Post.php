<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

// 1. Set protected fillable untuk menyertakan column mana saja yang boleh diisi.  Kalau fillable tidak diisi, maka bisa terkena error MassAssignmentException.  Untuk detailnya, bisa dilihat pada docs laravel 'Mass Assignment'
class Post extends Model {
    protected $fillable = ['title', 'author', 'slug', 'body'];
}

// 2. Pada terminal, input:
// php artisan tinker
/**
 * App\Model\Post::create([         << klik 'enter'.  Akan membuat line baru selama didlm array.
 * 'title' => 'Judul Artikel 1',
 * 'author' => 'Chris Shuo',
 * 'slug' => 'judul-artikel-1',
 * 'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt dicta quasi nam nobis consequatur, eligendi temporibus doloremque quae! Debitis a error deleniti modi illum cumque obcaecati ducimus. Magnam, exercitationem perferendis?'
 * ]);              << Sampai disini, klik enter maka jika tak ada MassAssignmentException Error maka data sudah terinsert ke table posts.
 */