<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\terminalstasiun;

use App\file;

class LokasiController extends Controller
{
   	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $carifilelokasi = 'Stasiun_';
            $carifilelokasi2 = 'Terminal_';
            $carijenisfilepeta ='files/peta';
            $filelokasi = file::where('path_file','LIKE',"%{$carijenisfilepeta}%")->where('nama_file','LIKE',"%{$carifilelokasi}%")->orWhere('path_file','LIKE',"%{$carijenisfilepeta}%")->where('nama_file','LIKE',"%{$carifilelokasi2}%")->get();
            $carijenisfile = 'files/gambar';
            $gambar = file::where('path_file','LIKE',"%{$carijenisfile}%")->where('nama_file','LIKE',"%{$carifilelokasi}%")->orWhere('path_file','LIKE',"%{$carijenisfile}%")->where('nama_file','LIKE',"%{$carifilelokasi2}%")->get();
        $terminalstasiun = terminalstasiun::orderBy('nama','asc')->paginate(10);
        return view('admin/lokasi', compact('terminalstasiun','filelokasi','gambar'));
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
        $terminalstasiun = terminalstasiun::findOrFail($request->id);
        $terminalstasiun->update($request->all());
        alert()->success('Sukses!', 'Data Lokasi Berhasil Diubah!.');
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
        terminalstasiun::destroy($id);
       alert()->success('Berhasil!','Stasiun / Terminal Berhasil Dihapus!');
        return redirect('/admin/lokasi');
    }

    public function save_data(Request $request)
    {
        // $terminalstasiun = terminalstasiun::create($request -> all());
        date_default_timezone_set('Asia/Jakarta');
        $terminalstasiun = new terminalstasiun();
            $terminalstasiun->id = "L".date('y').date('m').date('d').date('H').date('i')."-".rand(100,999);
            $terminalstasiun->jenis = $request->jenis;
            $terminalstasiun->nama = $request->nama;
            $terminalstasiun->layanan = $request->layanan;
            $terminalstasiun->alamat = $request->alamat;
            $terminalstasiun->haribuka = $request->haribuka;
            $terminalstasiun->haritutup = $request->haritutup;
            $terminalstasiun->jambuka = $request->jambuka;
            $terminalstasiun->jamtutup = $request->jamtutup;
            $terminalstasiun->telp = $request->telp;
            $terminalstasiun->id_peta = $request->id_peta;
            $terminalstasiun->gambar = $request->gambar;
            $terminalstasiun->save();
         alert()->success('Berhasil!','Stasiun / Terminal Berhasil Ditambahkan!');
        return redirect('/admin/lokasi');
    }
}
