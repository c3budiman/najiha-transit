<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
	public $incrementing = false;
    protected $fillable = ['id','judul','berita','gambar'];

    protected $table = 'berita';
}
