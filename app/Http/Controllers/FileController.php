<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\file;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexpeta()
    {
        $carifilepeta = 'files/peta';
        $filepeta = file::where('path_file','LIKE',"%{$carifilepeta}%")->orderBy('nama_file','asc')->paginate(30);

        return view('admin/uploadpeta', compact('filepeta'));
    }

    public function indexgambar()
    {
        $carifilegambar = 'files/gambar';
        $filegambar = file::where('path_file','LIKE',"%{$carifilegambar}%")->orderBy('nama_file','asc')->paginate(30);

        return view('admin/uploadgambar', compact('filegambar'));
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
        $path_file = file::where('id', $id)->first()->path_file;

        if(file_exists('storage/'.$path_file)){
            unlink('storage/'.$path_file);
            file::destroy($id);
            alert()->success('Sukses!', 'Berkas Berhasil Dihapus!');
            return redirect()->back();
        }else{
            file::destroy($id);
            alert()->error('Kesalahan!', 'Berkas Tidak Ditemukan! Record Database Tetap Dihapus.');
            return redirect()->back();
            }
    }
    public function form()
    {
        return view('peta.form');
    }

    public function uploadpeta(Request $request)
    {
        $this->validate($request, [
            'nama_file' => 'nullable|max:100',
            'path_file' => 'required|file|mimes:html|max:2000', // max 2MB
        ]);

        $uploadedFile = $request->file('path_file');

        $path = $uploadedFile->store('files/peta');

        date_default_timezone_set('Asia/Jakarta');
        $file = file::create([
            'id' => "F".date('y').date('m').date('d').date('H').date('i')."-".rand(100,999),
            'nama_file' => $request->nama_file ?? $uploadedFile->getClientOriginalName(),
            'path_file' => $path
        ]);

        alert()->success('Sukses!', 'File Peta Behasil Diunggah!.');
        return redirect()
        ->back()
        ->withSuccess(sprintf('File %s Peta Behasil Diunggah!.', $file->nama_file));
    }
    public function uploadgambar(Request $request)
    {
        $this->validate($request, [
            'nama_file' => 'nullable|max:100',
            'path_file' => 'required|image|mimes:jpg,png,jpeg|max:2000', // max 2MB
        ]);

        $uploadedFile = $request->file('path_file');

        $path = $uploadedFile->store('files/gambar');

        date_default_timezone_set('Asia/Jakarta');
        $file = file::create([
            'id' => "F".date('y').date('m').date('d').date('H').date('i')."-".rand(100,999),
            'nama_file' => $request->nama_file ?? $uploadedFile->getClientOriginalName(),
            'path_file' => $path
        ]);

        alert()->success('Sukses!', 'Gambar Behasil Diunggah!.');
        return redirect()
        ->back()
        ->withSuccess(sprintf('File %s Gambar Behasil Diunggah!.', $file->nama_file));
    }
}
