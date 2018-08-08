@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Layanan Informasi Moda Transportasi Umum Kota Depok</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">

  </head>

  <body id="page-top">
    <style>
   #wrapper { position: relative; }
   #over_map { position: absolute; top: 125px; left: 10px; z-index: 99; }
    </style>
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-navbar fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Depok Transportation System</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#Angkot">Angkot</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#Bus">Bus</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#Stasiun">Stasiun</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#tentang">Apa Ini?</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Komentar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <div id="wrapper">
   <div id="google_map">
    <object style="visibility: visible; width:100%;height:800px;" standby="loading data" id="peta" title="loading" type="text/html" data="pages/MapsEmpty.html"></object>
   </div>
  <div id="over_map">
      <button id="tombolcollapse" class="btn btn-primary" type="button" data-toggle="collapse" data-target="#infocolapse" aria-expanded="false" aria-controls="infocolapse">Informasi Moda</button>
      <br>
      <br>
      <div class="row">
        <div class="col">
          <div class="collapse multi-collapse" id="infocolapse">
            <div class="card card-body">
              <div class="card" style="width: 18rem;">
              <img id="gambarmoda" class="img-fluid rounded mx-auto d-block" alt="Responsive image" src="storage/files/gambar/6UjQZUXvY5chu7WBKTn3ri03llCAWUxU3LZ3pFGp.png" width="300px" height="300px">
              <div class="card-body">
                <h5 id="namamoda" class="card-title">Informasi Moda Transportasi</h5>
                <p id="infomoda-1" class="card-text text-dark">Silahkan Pilih Moda Transportasi!</p>
                <p id="infomoda-2" class="card-text text-dark"></p>
                <p id="infomoda-3" class="card-text text-dark"></p>
                <p id="infomoda-4" class="card-text text-dark"></p>
                <p id="infomoda-5" class="card-text text-dark"></p>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    

   <section class="portfolio bg-moda" id="Angkot" style="padding-top: 50px;"> 
      <div class="container">
        <h2 class="text-center text-uppercase mb-0" style="padding-bottom: 20px;">Moda Transportasi : Angkutan Kota</h2>
        <h6 class="text-center bg-titleangkot">Berikut ini informasi angkutan kota dengan keberangkatan atau tujuan, menuju dan dari Terminal Depok.</h6>
        <br>
        <div class="container">
          <div class="card-deck">

            <?php $count = 0; ?>
            @foreach($angkot->sortBy('nama') as $key=> $value)
            @if($count == 6)
            @break
            @endif
            <div class="card border-warnaangkot mb-3" style="min-width: 18rem; width: 18rem;">
              <div class="card-header bg-warnaangkot text-white"><h5>{{ $value->nama }}</h5></div>
              <div class="card-body">
                <h5 class="card-title bg-titleangkot">{{ $value->tujuan }}</h5>
                <p class="card-text text-dark" style="font-size: 12px;">{{ $value->jalur_trayek }}</p>
              </div>
                <div class="card-footer" style="position:bottom; bottom:0;">
                <a id="{{ $value->id }}{{ $value->nama }}" class="btn btn-xl btn-outline-dark js-scroll-trigger bg-buttonangkot" href="#page-top" data-peta="{{ $value->id_peta }}" data-moda="{{ $value->nama }}" data-gambar="{{ $value->gambar }}" data-tujuan="{{ $value->tujuan }}" data-tarif="{{ $value->tarif }}" data-jamoperasional="{{ $value->jam_operasional }}" data-jeniskend="{{ $value->jenis_kend }}" data-warna="{{ $value->warna }}" onclick="dopetaangkot('{{ $value->id }}{{ $value->nama }}')"><i class="fa fa-car mr-2"></i>Peta Trayek</a>
              </div>
            </div>          
            <?php $count++; ?>
            @endforeach

            <div id="hideangkot" class="container hidden">

          <div class="card-deck">

            <?php $count = 0; ?>
            @foreach($angkot->sortBy('nama') as $key=> $value)
            @if($count > 5)

            <div class="card border-warnaangkot mb-3" style="min-width: 18rem; width: 18rem;">
              <div class="card-header bg-warnaangkot text-white"><h5>{{ $value->nama }}</h5></div>
              <div class="card-body">
                <h5 class="card-title bg-titleangkot">{{ $value->tujuan }}</h5>
                <p class="card-text text-dark" style="font-size: 12px;">{{ $value->jalur_trayek }}</p>
              </div>
                <div class="card-footer" style="position:bottom; bottom:0;">
                <a id="{{ $value->id }}{{ $value->nama }}" class="btn btn-xl btn-outline-dark js-scroll-trigger bg-buttonangkot" href="#page-top" data-peta="{{ $value->id_peta }}" data-moda="{{ $value->nama }}" data-gambar="{{ $value->gambar }}" data-tujuan="{{ $value->tujuan }}" data-tarif="{{ $value->tarif }}" data-jamoperasional="{{ $value->jam_operasional }}" data-jeniskend="{{ $value->jenis_kend }}" data-warna="{{ $value->warna }}" onclick="dopetaangkot('{{ $value->id }}{{ $value->nama }}')"><i class="fa fa-car mr-2"></i>Peta Trayek</a>
              </div>
            </div>

            @endif
            <?php $count++; ?>
            @endforeach

           </div>
        </div>

            
      </div>
        </div>
      </div>  <!--div container -->
   
      <div class="container">
        <a class="btn btn-secondary btn-lg btn-block text-white target js-scroll-trigger" href="#Angkot" onclick="toggler('hideangkot');">Selanjutnya</a>
        <br>
      </div>
    </section>

    <section class="portfolio" id="Bus" style="padding-top: 50px;">
      <div class="container">
        <h2 class="text-center text-uppercase mb-0" style="padding-bottom: 20px;">Moda Transportasi : BUS</h2>
        <h6 class="text-center bg-titlebus">Berikut ini informasi bus antar kota dengan keberangkatan atau tujuan, menuju dan dari Terminal Depok.</h6>
        <br>
        <div class="container">
          <div class="card-deck">

            <?php $count = 0; ?>
            @foreach($bus->sortBy('nama') as $key=> $value)
            @if($count == 6)
            @break
            @endif

            <div class="card border-warnabus mb-3" style="min-width: 18rem; width: 18rem;">
              <div class="card-header bg-warnabus text-white"><h5>{{ $value->nama }}</h5></div>
              <div class="card-body">
                <h5 class="card-title bg-titlebus">{{ $value->keberangkatan }}-{{ $value->tujuan }}</h5>
                <p class="card-text text-dark" style="font-size: 14px;">{{ $value->jalur_trayek }}</p>
                </div>
                <div class="card-footer" style="position:bottom; bottom:0;">
                <a id="{{ $value->id }}{{ $value->nama }}" class="btn btn-xl btn-outline-dark js-scroll-trigger bg-buttonbus" href="#page-top" data-peta="{{ $value->id_peta }}" data-moda="{{ $value->nama }}" data-gambar="{{ $value->gambar }}" data-keberangkatan="{{ $value->keberangkatan }}" data-tujuan="{{ $value->tujuan }}" data-tarif="{{ $value->tarif }}" data-jamkeberangkatan="{{ $value->jam_keberangkatan }}" data-jeniskend="{{ $value->jenis_kend }}" data-warna="{{ $value->warna }}" onclick="dopetabus('{{ $value->id }}{{ $value->nama }}')"><i class="fa fa-bus mr-2"></i>Peta Trayek</a>
              </div>
            </div>

            <?php $count++; ?>
            @endforeach

        <div id="hidebus" class="container hidden">

          <div class="card-deck">
            
            <?php $count = 0; ?>
            @foreach($bus->sortBy('nama') as $key=> $value)
            @if($count > 5)

            <div class="card border-warnabus mb-3" style="min-width: 18rem; width: 18rem;">
              <div class="card-header bg-warnabus text-white"><h5>{{ $value->nama }}</h5></div>
              <div class="card-body">
                <h5 class="card-title bg-titlebus">{{ $value->keberangkatan }}-{{ $value->tujuan }}</h5>
                <p class="card-text text-dark" style="font-size: 14px;">{{ $value->jalur_trayek }}</p>
                </div>
                <div class="card-footer" style="position:bottom; bottom:0;">
                <a id="{{ $value->id }}{{ $value->nama }}" class="btn btn-xl btn-outline-dark js-scroll-trigger bg-buttonbus" href="#page-top" data-peta="{{ $value->id_peta }}" data-moda="{{ $value->nama }}" data-gambar="{{ $value->gambar }}" data-keberangkatan="{{ $value->keberangkatan }}" data-tujuan="{{ $value->tujuan }}" data-tarif="{{ $value->tarif }}" data-jamkeberangkatan="{{ $value->jam_keberangkatan }}" data-jeniskend="{{ $value->jenis_kend }}" data-warna="{{ $value->warna }}" onclick="dopetabus('{{ $value->id }}{{ $value->nama }}')"><i class="fa fa-bus mr-2"></i>Peta Trayek</a>
              </div>
            </div>

            @endif
            <?php $count++; ?>
            @endforeach

          </div>
        </div>
      </div>
      </div>

      <div class="container">

        <a class="btn btn-secondary btn-lg btn-block text-white target js-scroll-trigger" href="#Bus" onclick="toggler('hidebus');">Selanjutnya</a>
          <br>
        </div>
    </section>

    <section class="portfolio" id="Stasiun" style="padding-top: 50px;">
      <div class="container">
        <h2 class="text-center text-uppercase mb-0" style="padding-bottom: 20px;">Lokasi Stasiun & Terminal</h2>
        <h6 class="text-center bg-titlelokasi">Berikut ini informasi stasiun-stasiun dan terminal yang berada di daerah kota Depok.</h6>
        <br>
       <div class="container">
          <div class="card-deck">

            @foreach($lokasi->sortBy('nama') as $key=> $value)
                  
            <div class="card text-white border-warnalokasi mb-3" style="min-width: 18rem; width: 18rem;">
              <div class="card-header bg-warnalokasi"><h5>{{ $value->nama }}</h5></div>
              <div class="card-body">
                <h5 id="tipelayanan" class="card-title bg-titlelokasi">{{ $value->layanan }}</h5>
                <p class="card-text text-dark" style="font-size: 14px;"><b>Alamat: </b>{{ $value->alamat }}</p>
                </div>
                <div class="card-footer" style="position:bottom; bottom:0;">
                <a id="{{ $value->id }}{{ $value->nama }}" class="btn btn-xl btn-outline-dark js-scroll-trigger bg-buttonlokasi" href="#page-top" data-peta="{{ $value->id_peta }}" data-moda="{{ $value->nama }}" data-gambar="{{ $value->gambar }}" data-alamat="{{ $value->alamat }}" data-haribuka="{{ $value->haribuka }}" data-haritutup="{{ $value->haritutup }}" data-jambuka="{{ $value->jambuka }}" data-jamtutup="{{ $value->jamtutup }}" data-telp="{{ $value->telp }}" onclick="dopetalokasi('{{ $value->id }}{{ $value->nama }}')"><i class="fas fa-map-marker-alt mr-2"></i>Peta Lokasi</a>
              </div>
            </div>

            @endforeach

        </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="tentang">
      <div class="container">
        <h2 class="text-center text-uppercase text-white" style="margin-bottom: 30px;">Apa ini?</h2>
        <!--<hr class="star-light mb-5">-->
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead">Di buat pada tahun 2018, website ini dirancang untuk memberikan layanan informasi seputar moda transportasi yang terintegrasi dengan terminal Depok.</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">Website ini berisi informasi mencakup angkutan kota, bus antar kota, dan stasiun yang berada di wilayah kota Depok.</p>
          </div>
        </div>
        <div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-light js-scroll-trigger" href="#contact">
            <i class="fa fa-commenting mr-2"></i>
            Berikan Tanggapanmu!
          </a>
        </div>
      </div>
    </section>

    <section id="contact" style="padding-bottom: 1o;padding-bottom: 10px;padding-top: 10px;">
    </section>

    <!-- Komentar Section -->
    <section id="komentarlist" style="padding-top: 50px;">
      <div class="container">
        <h2 class="text-center text-uppercase mb-0" style="padding-bottom: 15px;">Komentar</h2>
        <h3 class="text-center" style="padding-bottom: 35px;"> Apakah anda memiliki komentar untuk kami? </h3>

        <div class="row">
          <div class="col-md-12">
            <br>
            @if (count($komentar) === 0)
            <h3 style="padding-bottom: 35px;"> Belum ada komentar :( Berikan komentar anda! </h3>
            @endif
            @foreach($komentar->sortByDesc('updated_at') as $key=> $value)
            <div class="comment bg-komentar" style="padding-top: 15px;padding-bottom: 15px;padding-left: 25px;padding-right: 25px;margin-bottom: 10px;">
              <div class="row">
                  <div class="col-md-1">
                    <img src="{{ 'https://www.gravatar.com/avatar/'. md5(strtolower(trim($value->email))) . '?s=50&d=wavatar' }}" class="author-image">
                  </div>
                    <div class="col-md-11">
                      <div class="author-name" style="color:#603d96;">
                        <h5>{{ $value->nama }}</h5>
                        <a class="author-time text-dark"> {{ $value->updated_at->format('D, d-M-Y, H:i') }} UTC+7</a>
                      </div>
                      <br>
                    <div class="comment-content">
                      <div class="card-block" style="word-wrap:break-word;">
                        <h6 style="color:#7b7b7b">{{ $value->moda }}/{{ $value->id_kendaraan }}/{{ $value->nopol }}</h6>
                      {{ $value->pesan }}
                    </div>
                    </div>
                    </div>
                </div>
              </div>
              @endforeach
              <div>
                <br>
                {!! $komentar->fragment('komentar')->links(); !!}
              </div>
            </div>
          </div>
          <div class="text-center mt-4">
            <button class="btn btn-primary btn-xl bg-tombol" data-toggle="modal" data-target="#modalkomentar"><i class="far fa-comment-dots"></i> Berikan Komentarmu!</button>
        </div>
        </div>
      </section>

      <div class="modal fade" id="modalkomentar" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-center" id="ModalLongTitle">Komentar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color: red; color: white;padding-top: 19.5px;padding-bottom: 19.5px;">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h3 class="text-center" style="padding-bottom: 10px;"> Berikan komentar dan tanggapanmu tentang moda transportasi kota Depok. </h3>
            <form method="post" action="store">
              @csrf
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Anda" required="required" maxlength="30">
                </div>
                <div class="form-group col-md-6">
                  <label for="email">E-mail</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="E-mail Anda" required="required" maxlength="30">
                </div>
              </div>
              <div class="form-group">
                <label>Jenis Moda Transportasi</label>
                <select class="form-control" id="moda" type="text" name="moda" onChange="changetextbox();" placeholder="Masukkan Moda yang Anda Gunakan" required="required" >
                  @foreach($moda as $value)
                    <option value="{{ $value->jenis }}">{{ $value->jenis }}</option>
                  @endforeach      
                </select>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="id_kendaraan" id="judulinput">Nama Kendaraan</label>
                  <input type="text" class="form-control" id="id_kendaraan" name="id_kendaraan" placeholder="Nama Kendaraan Yang Anda Gunakan" maxlength="20">
                </div>
                <div class="form-group col-md-6">
                  <label for="nopol">Nomor Polisi Kendaraan</label>
                  <input type="text" class="form-control" id="nopol" name="nopol" placeholder="Nomor Polisi Kend. Yang Anda Gunakan" maxlength="10">
              </div>
              </div>
              <div class="form-group">
                <label for="pesan">Komentar</label>
                <textarea class="form-control" id="pesan" rows="5" name="pesan" placeholder="Pesan Anda" required="required" maxlength="1000"></textarea>
              </div>
              <br> 
          </div>
          <div class="modal-footer">
              <button type="submit" name="submit" class="btn btn-primary btn-xl bg-tombol" id="sendMessageButton">Kirim <i class="far fa-envelope"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="footer text-center" style="background-color:#603d96!important;
  color:#fff!important; padding-top: 5rem; padding-bottom: 5rem">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Pengembang</h4>
            <p class="lead mb-0">Najiha Brilianti
              <br>najihabrilianti@gmail.com</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Media Sosial</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">Moda Transportasi Depok</h4>
            <p class="lead mb-0">Dibangun untuk memenuhi syarat dalam mencapai gelar Sarjana Muda Sistem Informasi - FIKTI
              <a href="http://startbootstrap.com">Universitas Gunadarma</a></p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white" style="background-color:#1a252f !important">
      <div class="container">
        <small>Copyright &copy; Najiha Brilianti - Depok Transportation System 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script> -->

    <!-- -->
    <!-- <script>$(document).ready(function(){
    $('.animated-icon1,.animated-icon3,.animated-icon4').click(function(){
        $(this).toggleClass('open');
    });
    });
    </script> -->

    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
    <script type='text/javascript' src='https://www.google.com/jsapi'></script>   
    <!-- Alerts -->
    <script src="js/sweetalert.js"></script>
    @include('Alerts::alerts')
    </body>

</html>
