<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bus extends Model
{
	public $incrementing = false;
    protected $fillable = ['id','nama','jenis_kend','kelas','seat','keberangkatan','tujuan','jalur_trayek','jam_keberangkatan','tarif','id_peta','warna','gambar','lokasi'];

    protected $table = 'bus';
}