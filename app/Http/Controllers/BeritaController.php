<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\berita;

use App\file;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gambar = file::where('path_file','LIKE',"%files/gambar%")->get();
        $berita = berita::orderBy('updated_at','desc')->paginate(20);
        return view('admin/berita', compact('berita','gambar'));
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
        //
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
        $berita = berita::findOrFail($request->id);
        $berita->update($request->all());
        alert()->success('Sukses!', 'Berita Berhasil Diubah!');
        return redirect('/admin/berita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        berita::destroy($id);
       alert()->success('Berhasil!','Berita Berhasil Dihapus!');
        return redirect('/admin/berita');
    }

    public function save_data(Request $request)
    {
        // $berita = berita::create($request -> all());
        date_default_timezone_set('Asia/Jakarta');
        $berita = new berita();
            $berita->id = "N".date('y').date('m').date('d').date('H').date('i')."-".rand(100,999);
            $berita->judul = $request->judul;
            $berita->berita = $request->berita;
            $berita->gambar = $request->gambar;
            $berita->save();
         alert()->success('Berhasil!','Berita Berhasil Ditambahkan!');
        return redirect('/admin/berita');
    }
}
