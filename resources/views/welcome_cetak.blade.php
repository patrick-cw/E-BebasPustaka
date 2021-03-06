@extends('layouts/landingpage')


@section('videocss')
  <link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet" />
@endsection
<!-- <link href="kp_depan/public/assets/css/new.css" rel="stylesheet" /> -->
@section('content')
      <section class="py-0" id="Beranda">
        <div class="bg-holder d-none d-md-block" style="background-image:url(kp_depan/public/assets/img/illustrations/undraw_Envelope_re_f5j4.png);background-position:right;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container position-relative">
          <div class="row align-items-center min-vh-75 my-lg-8">
            <div class="col-md-7 col-lg-6 text-center text-md-start py-8">
              <h1 class="mb-4 fs-7 display-1 lh-sm">E-Bebas Pustaka ITS</h1>
              <p class="mt-5 mb-3 fs-1 lh-base">Bebas Pustaka merupakan surat yang menerangkan bahwa mahasiswa tidak memiliki tanggungan pinjaman koleksi atau denda di Perpustakaan ITS. Setiap mahasiswa ITS yang telah menyelesaikan studi diwajibkan mengurus Bebas Pustaka sebagai salah satu persyaratan kelulusan.
              <br class="d-none d-lg-block" />
              <br class="d-none d-lg-block" /></p>
              <div class="col-md-12">
                <a class="btn btn-lg btn-primary hover-top rounded-1" style="border-radius:50px ;" href="#Tahapan" role="button">Tahapan Bebas Pustaka</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="pt-5" id="video">
        <div class="container">
        <div class="row flex-center mb-5">
            <div class="col-lg-8 text-center">
              <h1 class="fw-bold fs-md-3 fs-lg-4 fs-xl-5">Video Panduan</h1>
              <hr class="mx-auto text-primary my-4" style="height:3px; width:70px;" />

              <p class="mx-auto">Video panduan E-Bebas Pustaka.</p>
              <iframe class="ratio ratio-16x9" width="800" height="600" src="https://www.youtube.com/embed/qoQZfEo-2QU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        </div>
      </section>

      <section class="pt-5" id="Tahapan">
      <div class="container">
      <div class="card login-card">
        <div class="row no-gutters flex-center mb-5">
            <div class="col-lg-8">
           
            <h1 class="fw-bold fs-md-3 fs-lg-4 fs-xl-5 mt-5 text-center">Tahapan</h1>
              <hr class="mx-auto text-primary my-4" style="height:3px; width:70px;" />
              <p class="mx-auto text-center" style="font-size:16px;">Berikut adalah tahapan yang harus dilakukan untuk mendapatkan surat Bebas Pustaka</p>
            <ol class="step-list mt-6">
                <li class="step-list__item">
                    <div class="step-list__item__inner">
                        <div class="content">
                            <div class="body">
                                <h2>Step Pertama</h2>
                                <p>Mendaftar sebagai pengguna di E-Bebas Pustaka.</p>
                            </div>

                            <div class="icon">
                                <img src="kp_depan/public/assets/img/fill.svg" alt="Daftar" />
                            </div>                
                        </div>
                    </div>
                </li>
                <li class="step-list__item">
                    <div class="step-list__item__inner">
                        <div class="content">
                            <div class="body">
                                <h2>Step Kedua</h2>
                                <p>Upload mandiri di Repository ITS</p>
                            </div>

                            <div class="icon">
                                <img src="kp_depan/public/assets/img/up.svg" alt="Upload" />
                            </div>                
                        </div>
                    </div>
                </li>
                <li class="step-list__item">
                    <div class="step-list__item__inner">
                        <div class="content">
                            <div class="body">
                                <h2>Step Ketiga</h2>
                                <p> Cek Status file. Berisi link repository jika valid dan catatan pustakawan jika tidak valid. </p>
                            </div>

                            <div class="icon">
                                <img src="kp_depan/public/assets/img/check.svg" alt="Cek Status File" />
                            </div>                
                        </div>
                    </div>
                </li>
                <li class="step-list__item">
                    <div class="step-list__item__inner">
                        <div class="content">
                            <div class="body">
                                <h2>Step Keempat</h2>
                                <p>Lakukan pencetakan di MyITS Printing.</p>
                            </div>

                            <div class="icon">
                                <img src="kp_depan/public/assets/img/print.svg" alt="Cetak" />
                            </div>                
                        </div>
                    </div>
                </li>
                <li class="step-list__item">
                    <div class="step-list__item__inner">
                        <div class="content">
                            <div class="body">
                                <h2>Step Kelima</h2>
                                <p>Cek Status Pinjaman/tanggungan.</p>
                            </div>

                            <div class="icon">
                                <img src="kp_depan/public/assets/img/check-circle.svg" alt="Cek Status Pinjaman" />
                            </div>                
                        </div>
                    </div>
                </li>
                <li class="step-list__item">
                    <div class="step-list__item__inner">
                        <div class="content">
                            <div class="body">
                                <h2>Step Keenam</h2>
                                <p>Mahasiswa bisa melakukan download surat Bebas Pustaka.</p>
                            </div>

                            <div class="icon">
                                <img src="kp_depan/public/assets/img/download.svg" alt="Check" />
                            </div>                
                        </div>
                    </div>
                </li>
            </ol>
        </div>
        </div>
      </section>  
      
      <section class="pt-5" id="Layanan">

        <div class="container">
          <div class="row flex-center mb-5">
            <div class="col-lg-8 text-center">
              <h1 class="fw-bold fs-md-3 fs-lg-4 fs-xl-5">Layanan</h1>
              <hr class="mx-auto text-primary my-4" style="height:3px; width:70px;" />

              <p class="mx-auto">Berikut adalah layanan yang dapat diakses untuk memproses surat Bebas Pustaka.</p>
            
            </div>
          </div>
                <div class="row h-100 flex-start justify-content-center">
                  <!-- card -->
                  <div class="card col-6 col-sm-4 col-xl-2 mb-3 hover-top px-2" style="width: 15rem;">
                    <a class="stretched-link" href="https://repository.its.ac.id/" target="_blank"></a>
                      <img class="card-img-top mx-auto" src="kp_depan/public/assets/img/icons/e-thesis.png" style="height:200px; width:200px;" alt=""/>
                      <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-center">Repository ITS</h5>
                        <p class="card-text text-center">Link Repository ITS</p>
                      </div>
                  </div>
                  <!-- card -->
                  <div class="card col-6 col-sm-4 col-xl-2 mb-3 hover-top px-2" style="width: 15rem;">
                    <a class="stretched-link" href="https://printing.its.ac.id/dashboard" target="_blank"></a>
                    <img class="card-img-top mx-auto" src="kp_depan/public/assets/img/myits-printing-blue.png" style="height:200px; width:200px;" alt=""/>
                    <div class="card-body d-flex flex-column">
                      <h5 class="card-title text-center">MyITS Printing</h5>
                      <p class="card-text text-center">Link MyITS Printing</p>
                    </div>
                  </div>
                  <!-- card -->
                  <div class="card col-6 col-sm-4 col-xl-2 mb-3 hover-top px-2" style="width: 15rem;">
                    <a class="stretched-link" href="http://library.its.ac.id/spits/" target="_blank"></a>
                      <img class="card-img-top mx-auto" src="kp_depan/public/assets/img/icons/literacy.png" style="height:200px; width:200px;" alt=""/>
                      <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-center">SPITS</h5>
                        <p class="card-text text-center">Link SPITS</p>
                      </div>
                  </div>
                  <!-- <div class="card col-6 col-sm-4 col-xl-2 mb-3 hover-top px-2" style="width: 15rem;">
                    <a class="stretched-link" href="/" target="_blank"></a>
                      <img class="card-img-top mx-auto" src="kp_depan/public/assets/img/download.png" style="height:200px; width:200px;" alt=""/>
                      <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-center">Surat Bebas Pustaka</h5>
                        <p class="card-text text-center">Download Surat Bebas Pustaka</p>
                      </div>
                  </div> -->
              </div> 
        </div>

      </section>

      <section class="pt-5" id="Status">
        <div class="container">
        <div class="row flex-center mb-5">
            <div class="col-lg-8 text-center">
              <h1 class="fw-bold fs-md-3 fs-lg-4 fs-xl-5">Status</h1>
              <hr class="mx-auto text-primary my-4" style="height:3px; width:70px;" />

              <p class="mx-auto">Status proses mendapatkan surat bebas pustaka</p>
              
            </div>
          </div>
        <div class="row flex center mb-5">
          <ul class="progressbar">
                <li class="active">Aktivasi</li>
                <li class="active">Validasi</li>
                <li class="active">Penyerahan Hard Copy</li>
                <li>Pengecekan Tanggungan</li>
                <li>Menerima Surat BP</li>
            </ul>
        </div>
        <div class="row no-gutters flex-center mb-5">
        <div class="col-lg-8 text-center">
          <div class="card login-card">
            <h4 class="mt-5 mb-3">Hard Copy Diterima</h4>
            <p class="mb-5">Hard Copy sudah diterima perpustakaan. Pengecekan buku yang masih belum dikembalikan sedang dilakukan</p>
          </div>
        </div>
        </div>
        </div>
        </div>
        </div>
      </section>
      
      <!-- ============================================-->
      <!-- <section> begin ============================-->

      
      <!-- <section> close ============================-->
      <!-- ============================================-->

      
      
      
      <section class="pt-5">
        <div class="bg-holder" 
          style=" 
                  background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url(kp_depan/public/assets/img//gallery/perpus.jpg);;
                  background-position:center; 
                  background-size:cover;">
        </div>
        <div class="layer"> </div>
        
        <!--/.bg-holder-->

        <div class="container">
          <div class="row">
            <div class="col-12 py-5 text-white">
              <div class="d-flex flex-column flex-center">
                <h1 class="text-white fs-2 fs-sm-4 fs-lg-7 fw-bold">Perpustakaan ITS Surabaya</h1>
                <hr>
                <p>
                  Gedung Perpustakaan, Kampus ITS, JL Raya ITS, Sukolilo, 60111, Keputih, Sukolilo,
                  Kota Surabaya, Jawa Timur 60111
                </p>
                <div class="py-3" >
                  <a href="http://maps.google.com/?q=1200 Perpustakaan ITS Surabaya" target="_blank" class="btn btn-primary btn-sm rounded-1">Temukan Melalui Google Maps <i class="fas fa-map-marker-alt"></i></a>
                </div>
              </div>             
            <p class="text-white fs-2 fs-md-3" style="text-align: center">
              Menjadi pusat sumber belajar berstandar internasional
              yang mendukung secara aktif menjalankan tri dharma
              perguruan tinggi ITS menjadi World Class University
            </p>
          </div>
            <div class="col-4">
              <h5 class="text-white">Layanan New Normal</h6>
              <hr>
                <p class="text-white">
                Senin - Kamis       : 09.00-13.30
                <br>
                Jumat - Minggu  : Tutup
                <br>
                Tanggal Merah    : Tutup
                <br>
                <br>
                (Khusus untuk bebas pustaka, penyerahan hardcopy Tugas Akhir (TA)/Tesis/Disertasi, pengambilan buku yang dipesan (book order), pengembalian buku, dan pengurusan denda pinjaman koleksi)
              </p>
            </div>
            <div class="col-4" >
              <h5 class="text-white">Perkuliahan Normal</h6>
                <hr>
                  <p class="text-white">
                  Senin - Kamis       : 07.30-19.00
                  <br>
                  Jumat : 08.30 - 19.00
                  <br>
                  Sabtu : 09.00 - 13.00 
                  <br>
                  Minggu : Tutup
                  <br>
                </p>
            </div>
            <div class="col-4" >
              <h5 class="text-white">Perkuliahan Libur</h6>
                <hr>
                  <p class="text-white">
                  Senin - Kamis       : 07.30-16.00
                  <br>
                  Jumat : 08.30 - 16.00
                  <br>
                  Sabtu : Tutup 
                  <br>
                  Minggu : Tutup
                  <br>
                </p>
            </div>

          </div>
        </div>
      </section>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-6">

        <div class="container">
          <div class="row flex-center">
            <div class="col-auto mb-4">
              <ul class="list-unstyled list-inline mb-0">
                <li class="list-inline-item me3 me-sm-4"><a class="text-dark text-decoration-none" href="#">Beranda</a></li>
                <li class="list-inline-item me3 me-sm-4"><a class="text-dark text-decoration-none" href="#Layanan">Layanan</a></li>
                <li class="list-inline-item me3 me-sm-4"><a class="text-dark text-decoration-none" href="#FAQ">FAQ</a></li>
                <li class="list-inline-item me3 me-sm-4"><a class="text-dark text-decoration-none" href="#Video">Video</a></li>
                <li class="list-inline-item me3 me-sm-4"><a class="text-dark text-decoration-none" href="#Kontak">Kontak</a></li>
              </ul>
            </div>
          </div>
          <!-- <div class="row flex-center">
            <div class="col-auto mb-4">
              <p class="mb-0 fs--1 text-dark">&copy; This template is made with&nbsp;
                <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#3984F3" viewBox="0 0 16 16">
                  <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                </svg>&nbsp;by&nbsp;<a class="text-700" href="https://themewagon.com/" target="_blank">ThemeWagon </a>
              </p>
            </div>
          </div> -->
          <div class="row flex-center">
            <div class="col-auto">
              <ul class="list-unstyled list-inline">
                <li class="list-inline-item me-3"><a class="text-decoration-none" href="https://www.youtube.com/channel/UCjx4LnckEmsvkifJdY4bF7Q">
                    <svg class="bi bi-youtube" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.122C.002 7.343.01 6.6.064 5.78l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"></path>
                    </svg></a></li>
                <li class="list-inline-item me-3"><a class="text-decoration-none" href="https://www.facebook.com/perpustakaanITS/?ref=bookmarks">
                    <svg class="bi bi-facebook" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#3984F3" viewBox="0 0 16 16">
                      <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                    </svg></a></li>
                <li class="list-inline-item me-3"><a href="https://twitter.com/perpustakaanits">
                    <svg class="bi bi-twitter" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#3984F3" viewBox="0 0 16 16">
                      <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                    </svg></a></li>
                <li class="list-inline-item me-3"><a href="https://www.instagram.com/its.library/">
                    <svg class="bi bi-instagram" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#3984F3" viewBox="0 0 16 16">
                      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"> </path>
                    </svg></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->



@endsection


@section('videojs')
  <script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
  <!-- <script src="https://cdn.sc.gl/videojs-hotkeys/latest/videojs.hotkeys.min.js"></script> -->
  <script src="https://cdn.sc.gl/videojs-hotkeys/0.2/videojs.hotkeys.min.js"></script>
  <script src="{{asset('kp_depan')}}/public/assets/js/Youtube.min.js"></script>
  <script src="{{asset('kp_depan')}}/public/assets/js/video.js"></script>

@endsection