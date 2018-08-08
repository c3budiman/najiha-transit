<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class moda extends Model
{
	public $incrementing = false;
    protected $fillable = ['id','jenis'];

    protected $table = 'moda';
}