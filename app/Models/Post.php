<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all() {
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

    public static function find($slug): array { // kasih array spy saat error, lebih spesifik laravel nandai errornya dimana
        // Yang 'Post::all()', diganti jadi 'static::all()':
        // return Arr::first(static::all(), function($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        // atau bisa pakai ini juga
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
    
        if(!$post) {
            abort(404);
        } else {
            return $post;
        }
    }
}