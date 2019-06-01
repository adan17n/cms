<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $table = 'blog';
    protected $fillable = ['judul','pendahuluan','isi','penutup','penulis','gambar'];
}
