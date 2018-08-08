<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class angkot extends Model
{
	public $incrementing = false;
    protected $fillable = ['id','nama','jenis_kend','tujuan','jalur_trayek','jam_operasional','tarif','id_peta','gambar','warna'];

    protected $table = 'angkot';
}