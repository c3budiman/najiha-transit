<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class terminalstasiun extends Model
{
	public $incrementing = false;
    protected $fillable = ['id','jenis','nama','layanan','alamat','haribuka','haritutup','jambuka','jamtutup','telp','id_peta','gambar'];

    protected $table = 'terminalstasiun';
}
