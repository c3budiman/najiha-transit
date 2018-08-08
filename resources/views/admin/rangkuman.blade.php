@extends('adminlte::page')

@section('content')
<style>
  .bg-danger{
    color: white;
    background-color: #E71D36;
  }
  .bg-info{
    color: white;
    background-color: #2EC4B6;
  }
  .bg-warning{
    color: white;
    background-color: #FF9F1C;
  }
  .bg-success{
    color: white;
    background-color: #28A745;
  }
  </style>
  <div class="card">
    <div class="card-header">
      <h2><i>Welcome!</i></h2>
      <h3 class="card-title">Dashboard Admin Transit</h3>
    </div>
  </div>

<div class="box-body">
    
     <!-- Small Box (Stat card) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlahdataakun }}</h3>

                <p>Akun Admin</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="/admin/pengguna" class="small-box-footer">
                Manajemen Akun <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $jumlahdatakomentar }}</h3>

                <p>Komentar</p>
              </div>
              <div class="icon">
                <i class="fa fa-comments"></i>
              </div>
              <a href="/admin/komentar" class="small-box-footer">
                Menajemen Komentar <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>{{ $jumlahdataberita }}</h3>

                <p>Informasi Berita</p>
              </div>
              <div class="icon">
                <i class="fa fa-newspaper-o"></i>
              </div>
              <a href="/admin/berita" class="small-box-footer">
                Manajemen Berita<i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
</div>

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Informasi Moda Transportasi</h3>
    </div>
  </div>

  <div class="box-body">
          <div class="row">
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlahdatabus }}</h3>

                <p>Data Bus</p>
              </div>
              <div class="icon">
                <i class="fa fa-bus"></i>
              </div>
              <a href="/admin/bus" class="small-box-footer">
                Manajemen Bus <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlahdataangkot }}</h3>

                <p>Data Angkot</p>
              </div>
              <div class="icon">
                <i class="fa fa-car"></i>
              </div>
              <a href="/admin/angkot" class="small-box-footer">
                Manajemen Angkot <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlahdatalokasi }}</h3>

                <p>Data Terminal & Stasiun</p>
              </div>
              <div class="icon">
                <i class="fa fa-home"></i>
              </div>
              <a href="/admin/lokasi" class="small-box-footer">
                Manajemen Lokasi <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>
</div>

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Manajemen Berkas</h3>
    </div>
  </div>

  <div class="box-body">
          <div class="row">
             
            <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahdatapeta }}</h3>

                <p>Jumlah Berkas Peta</p>
              </div>
              <div class="icon">
                <i class="fa fa-map"></i>
              </div>
              <a href="/admin/filepeta" class="small-box-footer">
                Manajemen Berkas Peta<i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
            <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahdatagambar }}</h3>

                <p>Jumlah Berkas Gambar</p>
              </div>
              <div class="icon">
                <i class="fa fa-image"></i>
              </div>
              <a href="/admin/filegambar" class="small-box-footer">
                Manajemen Berkas Gambar <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>
</div>
@endsection

@section('css')
  <link rel="stylesheet" href="/css/admin_custom.css">
@endsection
