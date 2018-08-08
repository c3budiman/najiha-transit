<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\komentar;

use Validator;

class komentarcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $komentar = komentar::orderBy('index','desc')->paginate(10);
        return view('admin/komentars', compact('komentar'));
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        komentar::destroy($id);
        alert()->success('Berhasil!','Komentar Berhasil Dihapus!');
        return redirect('/admin/komentar');
    }

    public function save_data(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:30',
            'email' => 'required|string|email|max:30',
            'moda' => 'required|string|max:10',
            'id_kendaraan' => 'string|max:20',
            'nopol' => 'string|max:9',
            'pesan' => 'required|string|max:1000',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        if ($validator->fails()) {
            alert()->error('Kesalahan', 'Pastikan Anda Bukan Robot');
            return redirect('/moda#bagiankomentar')
                        ->withErrors($validator)
                        ->withInput();
        }
        // $komentar = komentar::create($request -> all());
        date_default_timezone_set('Asia/Jakarta');
        $komentar = new komentar();
            $komentar->id = "K".date('y').date('m').date('d').date('H').date('i')."-".rand(100,999);
            $komentar->nama = $request->nama;
            $komentar->email = $request->email;
            $komentar->moda = $request->moda;
            $komentar->id_kendaraan = $request->id_kendaraan;
            $komentar->nopol = $request->nopol;
            $komentar->pesan = $request->pesan;
            $komentar->save();
        alert()->success('Berhasil!', 'Komentar Anda Berhasil Ditambahkan! Terima Kasih.');
        return redirect('/moda#bagiankomentar');
    }
}
