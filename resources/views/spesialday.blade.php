<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="{{asset('assets/')}}/css/styles.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <title>Tertib Acara Partamiangan HKBP Ampera</title>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    </head>
    <body>

        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-chevron-up scrolltop__icon'></i>
        </a>

        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="#" class="nav__logo">HKBP AMPERA</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="/#home" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="/#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="/#services" class="nav__link">Services</a></li>
                        <li class="nav__item"><a href="/#menu" class="nav__link">Menu</a></li>
                        <li class="nav__item"><a href="/#contact" class="nav__link">Contact us</a></li>

                        <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>


            <!--========== HOME ==========-->
            <div class="container" style="margin-top: 10%">
                <center><h1 style="margin-bottom: 3%">Special Day</h1></center>
                <div class="menu__content">
                  <div class="card mb-3">
                      <a href="/home/listNatal">
                    <img src="{{asset('assets/')}}/img/nat.jpg" alt="" class="card-img-top">
                      </a>
                    <div class="card-body">
                      <h5 class="card-title">Natal</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>

                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="menu__content">
                    <div class="col">
                      <div class="card">
                          <a href="/home/listPaskah">
                        <img src="{{asset('assets/')}}/img/paskah.jpg" alt="" class="card-img-top">
                          </a>
                        <div class="card-body">
                          <h5 class="card-title">Paskah</h5>
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                      </div>
                    </div>
                    </div>
                    <div class="menu__content">
                    <div class="col">
                      <div class="card">
                        <a href="/home/listJumatAgung">
                        <img src="{{asset('assets/')}}/img/sja.jpg" alt="" class="card-img-top">
                        </a>
                        <div class="card-body">
                          <h5 class="card-title">Jumat Agung</h5>
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                      </div>
                    </div>
                    </div>

                    <div class="menu__content">
                    <div class="col">
                        <div class="card">
                            <a href="/home/listKenaikan">
                                <img src="{{asset('assets/')}}/img/ky.jpg" alt="" class="card-img-top" style="height: 53.5vh">
                            </a>
                            <div class="card-body">
                          <h5 class="card-title">Kenaikan Yesus</h5>
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        </div>
                      </div>
                    </div>
                    </div>

                    <div class="menu__content">
                    <div class="col">
                      <div class="card">
                        <a href="/home/listPentakosta">
                            <img src="{{asset('assets/')}}/img/p.jpg" alt="" class="card-img-top">
                        </a>
                        <div class="card-body">
                          <h5 class="card-title">Pentakosta</h5>
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
            </div>
            <footer class="footer section bd-container">
                <div class="footer__container bd-grid">
                    <div class="footer__content">
                        <a href="#" class="footer__logo">HKBP AMPERA</a>
                        <div>
                            <a href="https://mobile.facebook.com/profile.php?id=214572931912691&_rdc=1&_rdr" class="footer__social"><i class='bx bxl-facebook'></i></a>
                            <a href="https://www.instagram.com/rnhkbpampera/" class="footer__social"><i class='bx bxl-instagram'></i></a>
                            <a href="https://api.whatsapp.com/send?phone=+6281264016406" class="footer__social"><i class='bx bxl-whatsapp'></i></a>
                        </div>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">E-mail</h3>
                        <ul>
                            <li><a href="#" class="footer__link">hoseahutahuruk@gmial.com</a></li>
                            {{-- <li><a href="#" class="footer__link">Pricing</a></li>
                            <li><a href="#" class="footer__link">Fast food</a></li>
                            <li><a href="#" class="footer__link">Reserve your spot</a></li> --}}
                        </ul>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">Phone</h3>
                        <ul>
                            <li><a href="#" class="footer__link">+6281264016406</a></li>
                            {{-- <li><a href="#" class="footer__link">Contact us</a></li>
                            <li><a href="#" class="footer__link">Privacy policy</a></li>
                            <li><a href="#" class="footer__link">Terms of services</a></li> --}}
                        </ul>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">Adress</h3>
                        <ul>
                            <li>Jl. Karya Rakyat, Sei Agul,</li>
                            <li>Kec. Medan Bar.,Kota Medan,</li>
                            <li>Sumatera Utara 20114</li>
                            <li>tastyfood@email.com</li>
                        </ul>
                    </div>
                </div>

                <p class="footer__copy"> Website HKBP Ampera Resort Ampera</p>
            </footer>


        <!--========== SCROLL REVEAL ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--========== MAIN JS ==========-->
        <script src="{{asset('assets/')}}/js/main.js"></script>
    </body>
</html>
