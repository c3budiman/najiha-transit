<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\angkot;
use App\bus;
use App\terminalstasiun;
use App\komentar;
use App\User;
use App\berita;
Use App\file;

class RangkumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumlahdatabus = bus::count();
        $jumlahdataangkot = angkot::count();
        $jumlahdatalokasi = terminalstasiun::count();
        $jumlahdatakomentar = komentar::count();
        $jumlahdataakun = user::count();
        $jumlahdataberita = berita::count();
        $jumlahdatapeta = file::where('path_file','like','%peta%')->count();
        $jumlahdatagambar = file::where('path_file','like','%gambar%')->count();
        return view('admin/rangkuman', compact('jumlahdatabus','jumlahdataangkot','jumlahdatalokasi','jumlahdatakomentar','jumlahdataakun','jumlahdataberita','jumlahdatapeta','jumlahdatagambar'));
    }
    public function dashboard()
    {
        $jumlahdatabus = bus::count();
        $jumlahdataangkot = angkot::count();
        $jumlahdatalokasi = terminalstasiun::count();
        $jumlahdatakomentar = komentar::count();
        $jumlahdataakun = user::count();
        $jumlahdataberita = berita::count();
        $jumlahdatapeta = file::where('path_file','like','%peta%')->count();
        $jumlahdatagambar = file::where('path_file','like','%gambar%')->count();
        return view('home', compact('jumlahdatabus','jumlahdataangkot','jumlahdatalokasi','jumlahdatakomentar','jumlahdataakun','jumlahdataberita','jumlahdatapeta','jumlahdatagambar'));
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
        //
    }
}
