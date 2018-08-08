<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\angkot;
use App\bus;
use App\terminalstasiun;
use App\komentar;
use App\User;
use App\berita;
use App\file;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
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
}
