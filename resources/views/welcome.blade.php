

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>PPDB MA Shuffah Hizbullah</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('web/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('web/assets/css/templatemo-chain-app-dev.css') }}">
    <link rel="stylesheet" href="{{ asset('web/assets/css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('web/assets/css/owl.css') }}">

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="{{ asset('logo.png') }}" style="width:80px;" alt="PPDB MA Shuffah Hizbullah">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#services">Cara Daftar</a></li>
              <li class="scroll-to-section"><a href="#about">Profil</a></li>
              <li><div class="gradient-button"><a href="{{ url('daftar') }}"><i class="fa fa-sign-in-alt"></i> Registrasi</a></div></li>
            </ul>
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div id="modal" class="popupContainer" style="display:none;">
    <div class="popupHeader">
        <span class="header_title">Login</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div>

    <section class="popupBody">
        <!-- Social Login -->
        <div class="social_login">
            <div class="centeredText">
                <span>Silahkan Pilih</span>
            </div>

            <div class="action_btns">
                <div class="one_half"><a href="{{ route('login') }}" id="login_form" class="btn">Login</a></div>
                <div class="one_half last"><a href="{{ route('register') }}" id="register_form" class="btn">Sign up</a></div>
            </div>
        </div>

        <!-- Username & Password Login form -->
        <div class="user_login">
            <form>
                <label>Email / Username</label>
                <input type="text" />
                <br />

                <label>Password</label>
                <input type="password" />
                <br />

                <div class="checkbox">
                    <input id="remember" type="checkbox" />
                    <label for="remember">Remember me on this computer</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><a href="#" class="btn btn_red">Login</a></div>
                </div>
            </form>

            <a href="#" class="forgot_password">Forgot password?</a>
        </div>

        <!-- Register Form -->
        <div class="user_register">
            <form>
                <label>Full Name</label>
                <input type="text" />
                <br />

                <label>Email Address</label>
                <input type="email" />
                <br />

                <label>Password</label>
                <input type="password" />
                <br />

                <div class="checkbox">
                    <input id="send_updates" type="checkbox" />
                    <label for="send_updates">Send me occasional email updates</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><a href="#" class="btn btn_red">Register</a></div>
                </div>
            </form>
        </div>
    </section>
</div>

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>PPDB MA Shuffah Hizbullah</h2>
                    <p>selamat datang di pendaftaran penerimaan siswa baru online pada MA Shuffah Hizbullah</p>
                  </div>
                  <div class="col-lg-12">
                    <div class="white-button first-button scroll-to-section">
                      <a href="{{ url('daftar') }}">Daftar <i class="fab fa-apple"></i></a>
                    </div>
                    <div class="white-button scroll-to-section">
                      <a href="{{ route('login') }}">Masuk <i class="fab fa-google-play"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{ asset('web/assets/images/slider-dec.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4>MA Shuffah Hizbullah</h4>
            <img src="{{ asset('web/assets/images/heading-line-dec.png') }}" alt="">
            <p>MA Shuffah Hisbullah merupakan sekolah yang dapat mencetak generasi yang berahklaqul Qarimah.<a rel="nofollow" href="{{ url('/') }}" target="_blank">Daftarkan</a>Segera Putra/Putri anda untuk menjadi generasi yang mampu menegakan syariat islam sebagai rahmat bagi seluruh alam</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="service-item first-service">
            <div class="icon"></div>
            <h4>pendaftaran</h4>
            <p>untuk calon pendaftar silahkan login terlebih dahulu agar dapat menfatar.</p>
            <div class="text-button">
              <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item second-service">
            <div class="icon"></div>
            <h4>persyaratan</h4>
            <p>siswa di harapkan wajib melengkapi persyaratan untuk mendaftar.</p>
            <div class="text-button">
              <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item third-service">
            <div class="icon"></div>
            <h4>pembayaran</h4>
            <p>siswa wajib untuk melunasi tagihan pembayaran yang tertera.</p>
            <div class="text-button">
              <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item fourth-service">
            <div class="icon"></div>
            <h4>tunggu konfirmasi</h4>
            <p>silahkan menungu konfirmasi selama 1x24 jam pada akun masing-masing.</p>
            <div class="text-button">
              <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="section-heading">
            <h4>profil sekolah</h4>
            {{-- <img src="{{ asset('') }}" alt=""> --}}
            <p>MA Shuffah Hizbullah merupakan salah satu satuan pendidikan dengan jenjang MA di Hitu Lama, Kec. Leihitu, Kab. Maluku Tengah, Maluku. Dalam menjalankan kegiatanya, MA Shuffah Hizbullah berada di bawah naungan kementrian Agama. MA Shuffah Hizbullah memiliki akreditasi B berdasarkan sertifikat 14/BANS/M/PROMAL/X/2018.</p>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <p>Yuk segera daftar sekarang dengan cara klik tombol daftar dibawah ini!.</p>
              <div class="gradient-button">
                <a href="#">Daftar</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-image">
            <img src="{{ asset('banner.jpeg') }}" style="width: 500px; max-width: 100%;" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>


  <footer id="newsletter">
    <div class="container">
      <div class="row">
      </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>Contact Us</h4>
            <p>Dusun Oli-Desa Hitu-Kec.Leihitu Barat-Kab.Malteng</p>
            <p><a href="#">0813-8267-4732</a></p>
            <p><a href="#">shuffahambon@gmail.com</a></p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="copyright-text">
            <p>Copyright © @php
                $dt = date('Y');
                echo $dt;
            @endphp PPDB MA Shuffah Hizbullah. All Rights Reserved.
          <br>Design: <a href="{{ url('/') }}" target="_blank" title="">Devya</a><br>

          Distributed By: <a href="{{ url('/') }}" target="_blank" title="">Devya</a>
        </p>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="{{ asset('web/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('web/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('web/assets/js/owl-carousel.js') }}"></script>
  <script src="{{ asset('web/assets/js/animation.js') }}"></script>
  <script src="{{ asset('web/assets/js/imagesloaded.js') }}"></script>
  <script src="{{ asset('web/assets/js/popup.js') }}"></script>
  <script src="{{ asset('web/assets/js/custom.js') }}"></script>
</body>
</html>
