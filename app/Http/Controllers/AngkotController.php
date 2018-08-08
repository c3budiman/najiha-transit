<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\angkot;

use App\file;

class AngkotController extends Controller
{
    public function index()
    {
            $carifileangkot = 'Angkot_';
            $carijenisfilepeta ='files/peta';
            $fileangkot = file::where('path_file','LIKE',"%{$carijenisfilepeta}%")->where('nama_file','LIKE',"%{$carifileangkot}%")->get();
            $carijenisfile = 'files/gambar';
            $gambar = file::where('path_file','LIKE',"%{$carijenisfile}%")->where('nama_file','LIKE',"%{$carifileangkot}%")->get();
        $angkot = angkot::orderBy('nama','asc')->paginate(10);
        return view('admin/angkot', compact('angkot','fileangkot','gambar'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //komentar::create(Request::all());
       // return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function update(Request $request)
    {
        $angkot = angkot::findOrFail($request->id);
        $angkot->update($request->all());
        alert()->success('Sukses!', 'Data Angkutan Kota Berhasil Diubah!.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        angkot::destroy($id);
        alert()->success('Berhasil!','Angkutan Kota Berhasil Dihapus!');
        return redirect('/admin/angkot');
    }

    public function save_data(Request $request)
    {
        // $angkot = angkot::create($request -> all());
        date_default_timezone_set('Asia/Jakarta');
        $angkot = new angkot();
            $angkot->id = "A".date('y').date('m').date('d').date('H').date('i')."-".rand(100,999);
            $angkot->nama = $request->nama;
            $angkot->jenis_kend = $request->jenis_kend;
            $angkot->tujuan = $request->tujuan;
            $angkot->jalur_trayek = $request->jalur_trayek;
            $angkot->jam_operasional= $request->jam_operasional;
            $angkot->tarif = $request->tarif;
            $angkot->id_peta = $request->id_peta;
            $angkot->gambar = $request->gambar;
            $angkot->warna = $request->warna;
            $angkot->save();
        alert()->success('Berhasil!','Angkutan Kota Berhasil Ditambahkan!');
        return redirect('/admin/angkot');
    }
}
