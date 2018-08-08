<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

   // function insert(Request $req)
    //{
    //	$nama = $req->input('nama');
    //	$email = $req->input('email');
    //	$moda = $req->input('moda');
    //	$id_kendaraan = $req->input('id_kendaraan');
    //	$nopol = $req->input('nopol');
    //	$pesan = $req->input('pesan');

    //	$data = array('nama'=>$nama,'email'=>$email,'moda'=>$moda,'id_kendaraan'=>$id_kendaraan,'nopol'=>$nopol,'pesan'=>$pesan);

    //	DB::table('t_komentar')->insert($data);

    //	echo "Success";
    	//return redirect()->back();
    //}
}
