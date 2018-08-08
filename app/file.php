<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class file extends Model
{
	public $incrementing = false;
 	protected $fillable = ['id','nama_file','path_file'];

    protected $table = 'file';
}
