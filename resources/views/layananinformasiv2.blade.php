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
   </head>
   <body>
      <!-- Header Section Start -->
      <header id="hero-area" data-stellar-background-ratio="0.5">
         <!-- Navbar Start -->
         <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
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
                        <a class="nav-link page-scroll" href="#bagianberita">Berita</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link page-scroll" href="#bagiantentang">Apa Ini?</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link page-scroll" href="/moda">Moda Transportasi</a>
                     </li>
                  </ul>
               </div>
            </div>
            <!-- Mobile Menu Start -->
            <ul class="mobile-menu">
               <li>
                  <a class="page-scroll" href="#bagaianberita">Berita</a>
               </li>
               <li>
                  <a class="page-scroll" href="/moda">Moda Transportasi</a>
               </li>
            </ul>
            <!-- Mobile Menu End -->
         </nav>
         <!-- Navbar End -->   
         <div class="container fullscreen">
            <div class="row justify-content-md-center">
               <div class="col-md-10">
                  <div class="contents text-center">
                     <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">Layanan Informasi Moda Transportasi Umum Kota Depok</h1>
                     <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">Website ini menampilkan informasi mengenai moda transportasi umum yang terintegrasi dengan terminal depok. Anda juga dapat berbagi pendapat & keluhan tentang moda transportasi umum dengan pengguna lain.</p>
                     <a href="/moda#bagianmoda" class="btn btn-common wow fadeInUp page-scroll" data-wow-duration="1000ms" data-wow-delay="400ms">Lihat Moda</a>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- Header Section End --> 
      <!-- Counter Moda  Start -->
      <div class="counters section bg-counter"  data-stellar-background-ratio="0.5">
         <div class="container" style="padding:25px;">
            <div class="row">
               <div class="col-sm-6 col-md-3 col-lg-3">
                  <a class="page-scroll" href="/moda-angkot#bagianmoda" onclick="counterangkot()">
                     <div class="facts-item">
                        <div class="icon">
                           <i class="lnr lnr-car"></i>
                        </div>
                        <div class="fact-count">
                           <h3><span class="counter angka">{{$hitungangkot}}</span></h3>
                           <h4>Angkot</h4>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-sm-6 col-md-3 col-lg-3">
                  <a class="page-scroll" href="/moda-bus#bagianmoda" onclick="counterbus()">
                     <div class="facts-item">
                        <div class="icon">
                           <i class="lnr lnr-bus"></i>
                        </div>
                        <div class="fact-count">
                           <h3><span class="counter angka">{{$hitungbus}}</span></h3>
                           <h4>Bus</h4>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-sm-6 col-md-3 col-lg-3">
                  <a class="page-scroll" href="/moda-stasiun#bagianmoda" onclick="counterstasiun()">
                     <div class="facts-item">
                        <div class="icon">
                           <i class="lnr lnr-train"></i>
                        </div>
                        <div class="fact-count">
                           <h3><span class="counter angka">{{$hitungstasiun}}</span></h3>
                           <h4>Stasiun</h4>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-sm-6 col-md-3 col-lg-3">
                  <a class="page-scroll" href="/moda-terminal#bagianmoda" onclick="counterterminal()">
                     <div class="facts-item">
                        <div class="icon">
                           <i class="lnr lnr-home"></i>
                        </div>
                        <div class="fact-count">
                           <h3><span class="counter angka">{{$hitungterminal}}</span></h3>
                           <h4>Terminal</h4>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <!-- Counter Moda End -->
      <!-- Bagian Berita -->
      <section id="bagianberita bg-berita">
         <div id="testimonial" class="section" data-stellar-background-ratio="0.1">
            <div class="container">
               <div class="section-header">
                  <h2 class="section-title" style="color: white">Berita Terbaru</h2>
                  <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">Tekan Judul Berita Untuk Membaca Lebih Lanjut</p>
                  <hr class="lines">
               </div>
               <div id="carouselContent" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                     <div class="carousel-item active text-center p-4">
                        <?php $count = 0; ?>
                        @foreach($berita->sortByDesc('updated_at') as $key=> $value)
                        @if($count == 1)
                        @break
                        @endif
                        <h3 class="badge bg-judulberita text-center" data-toggle="modal" data-target="#modalberita" data-id="{{ $value->id }}" data-judul="{{ $value->judul }}" data-berita="{{ $value->berita }}" data-gambar="{{ $value->gambar }}">{{ $value->judul}}</h3>
                        <br>
                        <br>
                        <div class="row">
                           <div class="col-sm-1"></div>
                           <div class="col-sm-10">
                              <div class="wb-berita">
                                 <p class="berita">{{ $value->berita }}</p>
                              </div>
                           </div>
                           <div class="col-sm-1"></div>
                        </div>
                        <span class="text-white">{{ $value->updated_at->diffForHumans() }}</span>
                        <?php $count++; ?>
                        @endforeach
                     </div>
                     <?php $count = 0; ?>
                     @foreach($berita->sortByDesc('updated_at') as $key=> $value)
                     @if($count > 0)
                     <div class="carousel-item text-center p-4">
                        <h3 class="badge bg-judulberita text-center" data-toggle="modal" data-target="#modalberita" data-id="{{ $value->id }}" data-judul="{{ $value->judul }}" data-berita="{{ $value->berita }}" data-gambar="{{ $value->gambar }}">{{ $value->judul}}</h3>
                        <br>
                        <br>
                        <div class="row">
                           <div class="col-sm-1"></div>
                           <div class="col-sm-10">
                              <div class="wb-berita">
                                 <p class="berita">{{ $value->berita }}</p>
                              </div>
                           </div>
                           <div class="col-sm-1"></div>
                        </div>
                        <span class="text-white">{{ $value->updated_at->diffForHumans() }}</span>
                     </div>
                     @endif
                     <?php $count++; ?>
                     @endforeach
                  </div>
                  <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <!-- End Bagian Berita -->
      <!-- Bagian Apa Ini? -->
      <section id="bagiantentang" class="video-promo section">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-8">
                  <div class="video-promo-content text-center">
                     <h5 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Apa Ini?</h5>
                     <br>
                     <img class="img-fulid" src="img/logotentang.png" alt="">
                     <br>
                     <br>
                     <p class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms"><strong>Transit</strong> merupakan kepanjangan dari <strong><i>Transportation System</i></strong>.<br>Dibuat pada tahun 2018, website ini dirancang untuk memberikan layanan informasi seputar moda transportasi yang terintegrasi dengan terminal Depok. Website ini berisi informasi mencakup angkutan kota, bus antar kota, dan stasiun yang berada di wilayah kota Depok.</p>
                     <a href="/moda#bagiankomentar" class="btn btn-border wow fadeInUp page-scroll" data-wow-duration="1000ms" data-wow-delay="0.3s">Apa Kata Pengguna lain?</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Bagian Apa Ini? -->
      <!-- Contact Section Start -->
      <section id="contact" class="section" data-stellar-background-ratio="-0.2">
         <div class="contact-form">
            <div class="container">
               <h3 class="mb-2">Contact</h3>
               <br>
               <br>
               <div class="row">
                  <div class="col-sm">
                     <div class="contact-us">
                        <div class="contact-address">
                           <p>Najiha Brilianti <span class="fa fa-map-marker"> Indonesia </span></p>
                           <p class="email">E-mail: <span>(najihabrilianti@gmail.com)</span></p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-auto">
                     <div class="social-icons mt-2">
                        <ul>
                           <li class="facebook"><a href="https://web.facebook.com/najihabrillianti" target="_blank"><i class="fa fa-facebook"></i></a></li>
                           <li class="twitter"><a href="https://twitter.com/najihabrl_" target="_blank"><i class="fa fa-twitter"></i></a></li>
                           <li class="instagram"><a href="https://www.instagram.com/najihabrilianti/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Contact Section End -->
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
                        <a class="page-scroll" href="#">Beranda</a>
                     </li>
                     <li>
                        <a href="/moda">Moda Transportasi</a>
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
      <div id="modalberita" class="modal" tabindex="-1" role="dialog" style= "z-index: 999999;">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  </button>
               </div>
               <div class="modal-body">
                  <img class="img-fulid" src="img/logo.png" alt="">
                  <div class="text-center">
                  <br>
                  <h6 class="modal-title badge bg-judulberitacard" id="judul"></h6>
                  <br>
                  <br>
                     <img id="gambarberita" class="img-fulid" width="250px" height="250px" src="" alt="">
                  </div>
                  <br>
                  <br>
                  <p id="berita"></p>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
               </div>
            </div>
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
      <script src="js/waypoints.min.js"></script>    
      <script src="js/main.js"></script>
      <script src="js/beranda.js"></script>
   </body>
</html>