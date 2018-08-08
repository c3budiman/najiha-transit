<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\bus;

use App\file;

class BusController extends Controller
{
    public function index()
    {
            $carifilebus = 'Bus_';
            $carijenisfilepeta ='files/peta';
            $filebus = file::where('path_file','LIKE',"%{$carijenisfilepeta}%")->where('nama_file','LIKE',"%{$carifilebus}%")->get();
            $carijenisfile = 'files/gambar';
            $gambar = file::where('path_file','LIKE',"%{$carijenisfile}%")->where('nama_file','LIKE',"%{$carifilebus}%")->get();
        $bus = bus::orderBy('nama','asc')->paginate(10);
        return view('admin/bus', compact('bus','filebus','gambar'));
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
        $bus = bus::findOrFail($request->id);
        $bus->update($request->all());
        alert()->success('Sukses!', 'Data Bus Berhasil Diubah!.');
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
        bus::destroy($id);
         alert()->success('Berhasil!','Bus Berhasil Dihapus!');
        return redirect('/admin/bus');
    }

    public function save_data(Request $request)
    {
        // $bus = bus::create($request -> all());
        date_default_timezone_set('Asia/Jakarta');
        $bus = new bus();
            $bus->id = "B".date('y').date('m').date('d').date('H').date('i')."-".rand(100,999);
            $bus->nama = $request->nama;
            $bus->jenis_kend = $request->jenis_kend;
            $bus->kelas = $request->kelas;
            $bus->seat = $request->seat;
            $bus->keberangkatan = $request->keberangkatan;
            $bus->tujuan = $request->tujuan;
            $bus->jalur_trayek = $request->jalur_trayek;
            $bus->jam_keberangkatan = $request->jam_keberangkatan;
            $bus->tarif = $request->tarif;
            $bus->id_peta = $request->id_peta;
            $bus->warna = $request->warna;
            $bus->gambar = $request->gambar;
            $bus->lokasi = $request->lokasi;
            $bus->save();
        alert()->success('Berhasil!','Bus Berhasil Ditambahkan!');
        return redirect('/admin/bus');
    }
}
