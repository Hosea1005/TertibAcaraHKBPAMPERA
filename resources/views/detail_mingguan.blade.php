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
        <title>Tertib Acara HKBP Ampera</title>
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
                        <li><i class=' ></i></li>
                        <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>


            <!--========== HOME ==========-->
            <div class="container" style="background: transparent;">
                <div class="container" style="margin-top: 10%;text-align: center;background: transparent;">
                    <h1 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Tertib Acara HKBP AMPERA</h1>
                    <h4> {{ $tata->date }}</h4>
                </div>
                <div class="container" style="margin-top: 2%">
                    <h3>1. Marende {{ $tata->e1 }}</h3>
                    <pre>{{ $tata->le1 }}</pre>
                </div>

                <div class="container" style="margin-top: 2%">
                    <h3>2. Votum</h3>
                </div>
                <div class="container" style="margin-top: 2%">
                    <h3>3. Marende {{ $tata->e2 }}</h3>
                    <pre>{{ $tata->le2 }}</pre>
                </div>
                <div class="container" style="margin-top: 2%">
                    <h3>4. Patik ni Debata</h3>
                </div>
                <div class="container" style="margin-top: 2%">
                    <h3>5. Marende {{ $tata->e3 }}</h3>
                    <pre>{{ $tata->le3 }}</pre>
                </div>
                <div class="container" style="margin-top: 2%">
                    <h3>6. Manopoti Dosa</h3>
                </div>
                <div class="container" style="margin-top: 2%">
                    <h3>7. Marende {{ $tata->e4 }}</h3>
                    <pre>{{ $tata->le4 }}</pre>
                </div>
                <div class="container" style="margin-top: 2%">
                    <h3>8. Epistel</h3>
                    <pre>{{ $tata->epistel }}</pre>
                </div>
                <div class="container" style="margin-top: 2%">
                    <h3>9. Marende {{ $tata->e5 }}</h3>
                    <pre>{{ $tata->le5 }}</pre>
                </div>
                <div class="container" style="margin-top: 2%">
                    <h3>10. Manghatindahon haporseaon</h3>
                </div>
                <div class="container" style="margin-top: 2%">
                    <h3>11. Tingting - Tangiang Pangondianan</h3>
                </div>
                <div class="container" style="margin-top: 2%">
                    <h3>12. Marende {{ $tata->e6 }}</h3>
                    <pre>{{ $tata->le6 }}</pre>
                </div>
                <div class="container" style="margin-top: 2%">
                    <h3>13. Jamita {{ $tata->jamita }}</h3>
                </div>
                <div class="container" style="margin-top: 2%">
                    <h3>14. Marende {{ $tata->e7 }}</h3>
                    <pre>{{ $tata->le7 }}</pre>
                </div>
                <div class="container" style="margin-top: 2%">
                    <h3>7. Tangiang Palean - Ale Amanami - Pasupasu</h3>
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
