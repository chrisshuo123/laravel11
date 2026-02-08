<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Post extends Model {
    protected $table = 'blog_posts'; // jika contoh nama table nya 'blog_posts', maka tambahkan protected var $table = nama tabel yang sesuai.
    protected $primaryKey = 'post_id'; // jika contoh PK nya bukan id, tetapi post_id, maka harus disertakan var protected primaryKey tersebut.
}