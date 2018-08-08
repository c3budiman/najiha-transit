<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\moda;

class ModaController extends Controller
{
   	public function index()
    {
        $moda = moda::orderBy('index','asc')->get();
        return view('admin/moda', compact('moda'));
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
        moda::destroy($id);
        alert()->success('Berhasil!','Moda Transportasi Berhasil Dihapus!');
        return redirect('/admin/moda');
    }

    public function save_data(Request $request)
    {
        // $moda = moda::create($request -> all());
            date_default_timezone_set('Asia/Jakarta');
        $moda = new moda();
            $moda->id = "M".date('y').date('m').date('d').date('H').date('i')."-".rand(100,999);
            $moda->jenis = $request->jenis;
            $moda->save();
         alert()->success('Berhasil!','Moda Transportasi Berhasil Ditambahkan!');
        return redirect('/admin/moda');
    }
}
