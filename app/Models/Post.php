<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Post extends Model {}
// Saat Post kosong seperti, lihat pada halaman utama Blog, ada kan? Karena Post secara otomatis default adalah 'post"s"' (tinggal tambah "s") alias "posts".