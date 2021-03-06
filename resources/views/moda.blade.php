<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="keywords" content="Bootstrap, Parallax, Template, Registration, Landing">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="author" content="Grayrids">
      <title>Transit - Transportation System</title>
      <link rel="shortcut icon" href="img/favicon.ico">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/line-icons.css">
      <link rel="stylesheet" href="css/owl.carousel.css">
      <link rel="stylesheet" href="css/owl.theme.css">
      <link rel="stylesheet" href="css/nivo-lightbox.css">
      <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="css/slicknav.css">
      <link rel="stylesheet" href="css/animate.css">
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="stylesheet" href="css/custom.css">
      <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
      <script src='https://www.google.com/recaptcha/api.js'></script>
   </head>
   <body>
      <!-- Header Section Start -->
      <header id="hero-area" data-stellar-background-ratio="0.5">
         <!-- Navbar Start -->
         <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar navbarmoda">
            <div class="container">
               <!-- Brand and toggle get grouped for better mobile display -->
               <div class="navbar-header">
                  <a href="/" class="navbar-brand page-scroll"><img class="img-fulid" src="img/logo.png" alt=""></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="lnr lnr-menu"></i>
                  </button>
               </div>
               <div class="collapse navbar-collapse" id="main-navbar">
                  <ul class="navbar-nav mr-auto w-100 justify-content-end">
                     <li class="nav-item">
                        <a class="nav-link page-scroll" href="/">Beranda</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link page-scroll" href="#bagianpeta">Peta</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link page-scroll" href="#bagianmoda">Moda Transportasi</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link page-scroll" href="#bagiankomentar">Keluhan & Komentar</a>
                     </li>
                  </ul>
               </div>
            </div>
            <!-- Mobile Menu Start -->
            <ul class="mobile-menu">
               <li>
                  <a class="page-scroll" href="/">Beranda</a>
               </li>
               <li>
                  <a class="page-scroll" href="#bagianpeta">Peta</a>
               </li>
               <!-- <li>
                  <a class="page-scroll" href="#features">Features</a>
                  </li> -->
               <li>
                  <a class="page-scroll" href="#bagianmoda">Moda Transportasi</a>
               </li>
               <li>
                  <a class="page-scroll" href="#bagiankomentar">Keluhan & Komentar</a>
               </li>
            </ul>
            <!-- Mobile Menu End -->
         </nav>
         <!-- Navbar End -->       
      </header>
      <!-- Maps Section Start -->
      <section id="bagianpeta" class="section" style="padding:0px;">
         <div id="wrapper">
            <div id="google_map">
               <object class="map" standby="loading data" id="peta" title="loading" type="text/html" data="pages/MapsEmpty.html"></object>
            </div>
            <div id="over_map">
               <button id="tombolcollapse" class="btn btn-common wow fadeInUp" type="button" data-toggle="collapse" data-target="#infocolapse" aria-expanded="false" aria-controls="infocolapse">Informasi Moda</button>
               <br>
               <br>
               <div class="row">
                  <div class="col">
                     <div class="collapse multi-collapse" id="infocolapse">
                        <div class="card card-body" style="padding:0px;">
                           <div class="card" style="width: 18rem;">
                              <img id="gambarmoda" class="img-fluid rounded mx-auto d-block" alt="Responsive image" src="img/logo2.png" width="100%" height="150px">
                              <div class="card-body">
                                 <h6 style="font-size: 2em;" id="namamoda" class="card-title">Informasi Moda Transportasi</h6>
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
         <!-- </section> -->
      </section>
      <!-- Maps Section End -->
      <!-- Portfolio Section -->
      <section id="bagianmoda" class="section" style="padding-bottom:0px;">
         <!-- Container Starts -->
         <div class="container">
            <div class="section-header">
               <h2 class="section-title">Moda Transportasi</h2>
               <hr class="lines">
               <p class="section-subtitle">Silahkan pilih jenis moda transportasi dibawah.</p>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <!-- Portfolio Controller/Buttons -->
                  <div class="controls text-center">
                     <a id="buttonangkot" class="filter active btn btn-common" data-filter=".angkot">
                     Angkot 
                     </a>
                     <a id="buttonbus" class="filter btn btn-common" data-filter=".bus">
                     Bus
                     </a>
                     <a id="buttonstasiun" class="filter btn btn-common" data-filter=".stasiun">
                     Stasiun
                     </a>
                     <a id="buttonterminal" class="filter btn btn-common" data-filter=".terminal">
                     Terminal
                     </a>
                  </div>
                  <!-- Portfolio Controller/Buttons Ends-->
               </div>
               <!-- Portfolio Recent Projects -->
               <div id="portfolio" class="row">
                  @foreach($angkot->sortBy('nama') as $key=> $value)
                  <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix angkot">
                     <div class="portfolio-item">
                        <div class="shot-item">
                           <div class="comment bg-komentar cardmoda">
                              <a class="badge bg-badge page-scroll" href="#bagianpeta" style="font-size: 1.5em; margin-bottom: 5px;" id="angkot{{ $value->id }}" data-peta="{{ $value->id_peta }}" data-moda="{{ $value->nama }}" data-gambar="{{ $value->gambar }}" data-tujuan="{{ $value->tujuan }}" data-tarif="{{ $value->tarif }}" data-jamoperasional="{{ $value->jam_operasional }}" data-jeniskend="{{ $value->jenis_kend }}" data-warna="{{ $value->warna }}" onclick="dopetaangkot('angkot{{ $value->id }}')">{{ $value->nama }}</a>
                              <p class="card-title textmoda" data-toggle="collapse" data-target="#infocolapseangkot{{ $value->id }}"><i class="fa fa-road" style="color:#1D9B7F" aria-hidden="true"></i> {{ $value->tujuan }}</p>
                              <div class="collapse multi-collapse" id="infocolapseangkot{{ $value->id }}">
                                 <p class="text-dark" style="font-size: 14px;">{{ $value->jalur_trayek }}</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  @endforeach
                  @foreach($bus->sortBy('nama') as $key=> $value)
                  <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix bus">
                     <div class="portfolio-item">
                        <div class="shot-item">
                           <div class="comment bg-komentar cardmoda">
                              <a class="badge bg-badge page-scroll" href="#bagianpeta" style="font-size: 1.5em; margin-bottom: 5px;" id="bus{{ $value->id }}" data-peta="{{ $value->id_peta }}" data-moda="{{ $value->nama }}" data-gambar="{{ $value->gambar }}" data-keberangkatan="{{ $value->keberangkatan }}" data-tujuan="{{ $value->tujuan }}" data-tarif="{{ $value->tarif }}" data-jamkeberangkatan="{{ $value->jam_keberangkatan }}" data-jeniskend="{{ $value->jenis_kend }}" data-kelas="{{ $value->kelas}}" data-seat="{{$value->seat}}" data-warna="{{ $value->warna }}" onclick="dopetabus('bus{{ $value->id }}')">{{ $value->nama }}</a>
                              <p class="card-title textmoda" data-toggle="collapse" data-target="#infocolapsebus{{ $value->id }}"><i class="fa fa-road" style="color:#1D9B7F" aria-hidden="true"></i> {{ $value->keberangkatan }}-{{ $value->tujuan }}</p>
                              <div class="collapse multi-collapse" id="infocolapsebus{{ $value->id }}">
                                 <p class="text-dark" style="font-size: 14px;"><b>Via: </b>{{ $value->jalur_trayek }}</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  @endforeach
                  @foreach($stasiun->sortBy('nama') as $key=> $value)
                  <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix stasiun">
                     <div class="portfolio-item">
                        <div class="shot-item">
                           <div class="comment bg-komentar cardmoda">
                                 <a class="badge bg-badge page-scroll" href="#bagianpeta" style="font-size: 1.5em; margin-bottom: 5px;" id="stasiun{{ $value->id }}" data-peta="{{ $value->id_peta }}" data-moda="{{ $value->nama }}" data-gambar="{{ $value->gambar }}" data-alamat="{{ $value->alamat }}" data-haribuka="{{ $value->haribuka }}" data-haritutup="{{ $value->haritutup }}" data-jambuka="{{ $value->jambuka }}" data-jamtutup="{{ $value->jamtutup }}" data-telp="{{ $value->telp }}" onclick="dopetalokasi('stasiun{{ $value->id }}')">{{ $value->nama }}</a>
                                 <p class="card-title textmoda" data-toggle="collapse" data-target="#infocolapsestasiun{{ $value->id }}"><i class="fa fa-home" style="color:#1D9B7F" aria-hidden="true"></i> <b>Layanan: </b>{{ $value->layanan }}</p>
                                 <div class="collapse multi-collapse" id="infocolapsestasiun{{ $value->id }}">
                                    <p class="text-dark" style="font-size: 14px;"><b>Alamat: </b>{{ $value->alamat }}</p>
                                 </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  @endforeach
                  @foreach($terminal->sortBy('nama') as $key=> $value)
                  <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix terminal">
                     <div class="portfolio-item">
                        <div class="shot-item">
                           <div class="comment bg-komentar cardmoda" style="border-right:300px; width: 350px">
                                 <a class="badge bg-badge page-scroll" href="#bagianpeta" style="font-size: 1.5em; margin-bottom: 5px;" id="terminal{{ $value->id }}" data-peta="{{ $value->id_peta }}" data-moda="{{ $value->nama }}" data-gambar="{{ $value->gambar }}" data-alamat="{{ $value->alamat }}" data-haribuka="{{ $value->haribuka }}" data-haritutup="{{ $value->haritutup }}" data-jambuka="{{ $value->jambuka }}" data-jamtutup="{{ $value->jamtutup }}" data-telp="{{ $value->telp }}" onclick="dopetalokasi('terminal{{ $value->id }}')">{{ $value->nama }}</a>
                                 <p style="width:300px; margin-right: 300px;" class="card-title textmoda" data-toggle="collapse" data-target="#infocolapseterminal{{ $value->id }}"><i class="fa fa-home" style="color:#1D9B7F" aria-hidden="true"></i> <b>Layanan: </b>{{ $value->layanan }}</p>
                                 <div class="collapse multi-collapse" id="infocolapseterminal{{ $value->id }}">
                                    <p class="text-dark" style="font-size: 14px;"><b>Alamat: </b>{{ $value->alamat }}</p>
                                 </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
         </div>
         <!-- Container Ends -->
      </section>
      <!-- Portfolio Section Ends --> 
      <!-- Bagian Komentar -->
      <section>
         <div id="bagiankomentar" class="section pricing-section">
            <div class="container">
               <div class="section-header" style="margin-bottom:10px;">
                  <h2 class="section-title">Keluhan & Komentar</h2>
                  <hr class="lines">
                  <p class="section-subtitle" style="margin-bottom:0px;">Daftar keluhan & komentar pengguna terhadap moda transportasi umum di wilayah Kota Depok.</p>
               </div>
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
                              <img src="{{ 'https://www.gravatar.com/avatar/'. md5(strtolower(trim($value->email))) . '?s=50&d=identicon' }}" class="author-image">
                           </div>
                           <div class="col-md-11">
                              <div class="author-name" style="color:#61D2B4;">
                                 <h6><strong>{{ $value->nama }}</strong><a class="author-time text-dark"> {{ $value->updated_at->diffForHumans() }}</a></h6>
                              </div>
                              <div class="comment-content">
                                 <div class="card-block" style="word-wrap:break-word;">
                                    <h6 style="color:#FF9671">{{ $value->moda }}/{{ $value->id_kendaraan }}/{{ $value->nopol }}</h6>
                                    <br>
                                    {{ $value->pesan }}
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     @endforeach
                     <div>
                        <br>
                        {!! $komentar->fragment('bagiankomentar')->links(); !!}
                     </div>
                  </div>
               </div>
               <div class="text-center mt-4">
                  <a class="btn btn-common wow fadeInUp page-scroll" href="#formkomentar" data-wow-duration="1000ms" data-wow-delay="0.3s" onclick="bukaformkomentar()" ><i class="fa fa-comments-o"></i>  Berikan Tanggapanmu!</a>
               </div>
               <div class="collapse multi-collapse" id="colapsekomentar">
                  <section id="formkomentar" class="section">
                     <h3 class="text-center" style="padding-bottom: 10px;"> Berikan komentar dan tanggapanmu tentang moda transportasi kota Depok. </h3>
                     <div class="comment bg-komentar" style="padding-top: 15px;padding-bottom: 15px;padding-left: 25px;padding-right: 25px;margin-bottom: 10px;">
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
                              <select class="form-control" id="moda" type="text" name="moda" onclick="changetextbox()" onchange="changetextbox()" placeholder="Masukkan Moda yang Anda Gunakan" required="required">
                                 <option selected="selected" disabled="disabled" value="-">Pilih Jenis Moda</option>
                                 @foreach($moda as $value)
                                 <option value="{{ $value->jenis }}" class="text-dark">{{ $value->jenis }}</option>
                                 @endforeach      
                              </select>
                           </div>
                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label for="id_kendaraan" id="judulinput"></label>
                                 <div class="collapse multi-collapse" id="formangkot">
                                    <select type="text" class="form-control" id="opsiangkot" name="id_kendaraan">
                                       <option selected="selected" disabled="disabled" value="-">Pilih Nama Angkot</option>
                                       @foreach($angkot as $value)
                                       <option id="opsiangkot" value="{{ $value->nama }}">Angkot : {{ $value->nama}}</option>
                                       @endforeach
                                    </select>
                                 </div>
                                 <div class="collapse multi-collapse" id="formbus">
                                    <select type="text" class="form-control" id="opsibus" name="id_kendaraan">
                                       <option selected="selected" disabled="disabled" value="-">Pilih Nama Bus</option>
                                       @foreach($bus as $value)
                                       <option id="opsibus" value="{{ $value->nama }}">Bus : {{ $value->nama }}</option>
                                       @endforeach
                                    </select>
                                 </div>
                                 <div class="collapse multi-collapse" id="formstasiun">
                                    <select type="text" class="form-control" id="opsistasiun" name="id_kendaraan">
                                       <option selected="selected" disabled="disabled" value="-">Pilih Nama Stasiun</option>
                                       @foreach($stasiun as $value)
                                       <option id="opsistasiun" value="{{ $value->nama }}">Stasiun : {{ $value->nama }}</option>
                                       @endforeach
                                    </select>
                                 </div>
                                 <div class="collapse multi-collapse" id="formterminal">
                                    <select type="text" class="form-control" id="opsiterminal" name="id_kendaraan">
                                       <option selected="selected" disabled="disabled" value="-">Pilih Nama Terminal</option>
                                       @foreach($terminal as $value)
                                       <option id="opsiterminal" value="{{ $value->nama }}">Terminal : {{ $value->nama }}</option>
                                       @endforeach
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="nopol">Nomor Polisi Kendaraan (Oprional)</label>
                                 <input type="text" class="form-control" id="nopol" name="nopol" placeholder="Nomor Polisi Kend. Yang Anda Gunakan" maxlength="9">
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="pesan">Komentar</label>
                              <textarea class="form-control" id="pesan" rows="5" name="pesan" placeholder="Pesan Anda" required="required" maxlength="1000"></textarea>
                           </div>
                           <br>
                           <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                              <label class="col-md-4 control-label">CAPTCHA</label>
                              <div class="col-md-12 pull-center">
                                 {!! app('captcha')->display() !!}
                                 @if ($errors->has('g-recaptcha-response'))
                                 <span class="help-block">
                                 <br>
                                 <strong style="color:red;">Kesalahan! Pastikan Anda Bukan Robot</strong>
                                 </span>
                                 @endif
                              </div>
                           </div>
                           <br> 
                           <button type="submit" name="submit" class="btn btn-common wow fadeInUp page-scroll animated" id="sendMessageButton">Kirim</button>
                        </form>
                     </div>
                  </section>
               </div>
            </div>
         </div>
      </section>
      <!-- End Bagian Komentar -->
      <!-- Footer Section Start -->
      <footer>
         <div class="container">
            <div class="row">
               <!-- Footer Links -->
               <div class="col-lg-6 col-sm-6 col-xs-12">
                  <ul class="footer-links">
                     <li>
                        <a>Sitemap : </a>
                     </li>
                     <li>
                        <a href="/">Beranda</a>
                     </li>
                     <li>
                        <a class="page-scroll" href="#">Moda Transportasi</a>
                     </li>
                  </ul>
               </div>
               <div class="col-lg-6 col-sm-6 col-xs-12">
                  <div class="copyright">
                     <p>Copyrights &copy; <a rel="nofollow" href="http://najihabrilianti.blogspot.com/" target="_blank">Najiha Brilianti</a> - Transit 2018</p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer Section End --> 
      <!-- Go To Top Link -->
      <a href="#" class="back-to-top">
      <i class="lnr lnr-arrow-up"></i>
      </a>
      <div id="loader">
         <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
         </div>
      </div>
      <!-- jQuery first, then Tether, then Bootstrap JS. -->
      <script src="js/jquery-min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.mixitup.js"></script>
      <script src="js/nivo-lightbox.js"></script>
      <script src="js/owl.carousel.js"></script>    
      <script src="js/jquery.stellar.min.js"></script>    
      <script src="js/jquery.nav.js"></script>    
      <script src="js/scrolling-nav.js"></script>    
      <script src="js/jquery.easing.min.js"></script>    
      <script src="js/smoothscroll.js"></script>    
      <script src="js/jquery.slicknav.js"></script>     
      <script src="js/wow.js"></script>   
      <script src="js/jquery.vide.js"></script>
      <script src="js/jquery.counterup.min.js"></script>    
      <script src="js/jquery.magnific-popup.min.js"></script>    
      <script src="js/main.js"></script>
      <script src="js/moda.js"></script>
      <script src="js/komentar.js"></script>
      <script src="js/sweetalert.js"></script>
      @include('Alerts::alerts')
   </body>
</html>