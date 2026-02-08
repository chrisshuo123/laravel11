<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Post extends Model { // lgsg terhubung ke tabel 'posts' scr default.  Misal, mau tabel 'blog_posts', bisa juga tinggal dikasih tahu saja
    public static function all() { // ini error karena scr default di class Model itu punya juga method yg namanya all(), sehingga ga perlu bikin lagi sebetulnya.  Ini di bagian sebelumnya kita simulasikan kita bikin method sendiri namanya all() yg bertugas untuk mengambil semua data pada array.  Karna seluruh array dibawah sudah tidak dibutuhkan lagi dimana kita sudah ada semuanya pada db sqlite, tinggal dihapus saja.
        return [
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
        ];
    }

    public static function find($slug): array { // Nah yang find sebetulnya juga ada, jadi ini ga perlu Model Post ini, keren banget.  Bisa dihapus juga bagian ini.
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
    
        if(!$post) {
            abort(404);
        } else {
            return $post;
        }
    }
}