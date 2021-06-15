<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <!--========== CSS ==========-->
        <link rel="stylesheet" href="{{asset('assets/')}}/css/styles.css">
        {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous"> --}}
        <title>Tertib Acara HKBP Ampera</title>
        {{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> --}}
        {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script> --}}
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
                        <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">Current</a></li>
                        <li class="nav__item"><a href="#services" class="nav__link">Protocol</a></li>
                        <li class="nav__item"><a href="#menu" class="nav__link">List</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact us</a></li>

                        <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--========== HOME ==========-->
            <section class="home" id="home">
                <div class="home__container bd-container bd-grid">
                    <div class="home__data">
                        <h1 class="home__title">Welcome to</h1>
                        <h2 class="home__subtitle">Website HKBP AMPERA</h2>
                        <a href="/tam" class="button">View Menu</a>
                    </div>
    
                    <img src="{{asset('assets/')}}/img/a.png" alt="" class="home__img">
                </div>
            </section>
            
            <!--========== ABOUT ==========-->
            <section class="about section bd-container" id="about">
                <div class="about__container  bd-grid">
                    <div class="about__data">
                        <span class="section-subtitle about__initial">Tertib Acara</span>
                        <h2 class="section-title about__initial">Terib Acara Mingguan</h2>
                        <p class="about__description">Tertib Acara ini dipergunakan bagi jemaat sebagai rundown dalam ibadah gereja mingguan biasa.</p>
                        <a href="#" class="button">Explore history</a>
                    </div>

                    <img src="{{asset('assets/')}}/img/m.png" alt="" class="about__img">
                </div>
            </section>

            <!--========== SERVICES ==========-->
            <section class="services section bd-container" id="services">
                <span class="section-subtitle">Protect Yourself</span>
                <h2 class="section-title">Protocol Covid</h2>

                <div class="services__container  bd-grid">
                    <div class="services__content" >
                        <i class="fa-solid fa-mask-face"></i>
                            <img src="{{asset('assets/')}}/img/mask.png" class="services__img" alt="" >
                        <h3 class="services__title">Masker</h3>
                        <p class="services__description">Untuk memasuki gereja jemaa HKBP Ampera di wajibkan agar menggunakan masker sehingga tidak menularkan atapun terkena virus.</p>
                    </div>

                    <div class="services__content" >
                        <i class="fa-solid fa-mask-face"></i>
                            <img src="{{asset('assets/')}}/img/daa.png" class="services__img" alt="" >
                        <h3 class="services__title">Cuci Tangan</h3>
                        <p class="services__description">Jagalah kesehatan dengan rajin cuci tangan, agar bakteri dan virus yang ada dapat hilang dari tangan anda.</p>
                    </div>

                    <div class="services__content" >
                        <i class="fa-solid fa-mask-face"></i>
                            <img src="{{asset('assets/')}}/img/cs.png" class="services__img" alt="" >
                        <h3 class="services__title">Cek Suhu</h3>
                        <p class="services__description">Sebelum memasuki rumah ibadah, jemaat akan di cek suhunya agar dapat memfilter jemaat yang suhu tubuhnya diatas 3,5 derajat celsius.</p>
                    </div>
                </div>
            </section>

            <!--========== MENU ==========-->
            <section class="menu section bd-container" id="menu">
                <span class="section-subtitle">Tertib Acara</span>
                <h2 class="section-title">Jenis-Jenis TertibAcara</h2>

                <div class="menu__container bd-grid">
                    <div class="menu__content">
                        <img src="{{asset('assets/')}}/img/m.png" alt="" class="menu__img">
                        <h3 class="menu__name">Mingguan</h3>
                        <span class="menu__detail">Setiap hari minggu</span>
                        {{-- <a href="#" class="button menu__button"><i class='bx bx-cart-alt'></i></a> --}}
                    </div>

                    <div class="menu__content">
                        <img src="{{asset('assets/')}}/img/aws.png" alt="" class="menu__img">
                        <h3 class="menu__name">Partamiangan</h3>
                        <span class="menu__detail">Acara per wijk</span>
                    </div>
                    
                    <div class="menu__content">
                        <img src="{{asset('assets/')}}/img/cdg.png" alt="" class="menu__img">
                        <h3 class="menu__name">Spacial Day</h3>
                        <span class="menu__detail">Acara Natal, dan lain-lain.</span>
                    </div>
                </div>
            </section>

            <!--===== APP =======-->
            <section class="app section bd-container">
                <div class="app__container bd-grid">
                    <div class="app__data">
                        <span class="section-subtitle app__initial">QR Code</span>
                        <h2 class="section-title app__initial">Scan this QR CODE to access this website</h2>
                        {{-- <p class="app__description">Find our application and download it, you can make reservations, food orders, see your deliveries on the way and much more.</p> --}}
                    </div>

                    <img src="{{asset('assets/')}}/img/code.png" alt="" class="app__img">
                </div>
            </section>

            <!--========== CONTACT US ==========-->
            <section class="contact section bd-container" id="contact">
                <div class="contact__container bd-grid">
                    <div class="contact__data">
                        <span class="section-subtitle contact__initial">Let's talk</span>
                        <h2 class="section-title contact__initial">Contact us</h2>
                        <p class="contact__description">Klik tombol di kanan jika anda mempunyai pertanyaan.</p>
                    </div>

                    <div class="contact__button">
                        <a href="https://api.whatsapp.com/send?phone=+6281264016406" class="button">Contact us now</a>
                    </div>
                </div>
            </section>

            <section class="app section bd-container" >
                <div class="app__container">
                    <span class="section-subtitle">Maps</span>
                    <h2 class="section-title">Location HKBP AMPERA</h2>
                    <center>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.916190794045!2d98.65678864977937!3d3.6066570511639466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312e1e0c4395dd%3A0xea9bd8bcf0b4438f!2sHKBP%20Ampera!5e0!3m2!1sid!2sid!4v1623643714378!5m2!1sid!2sid" width="800vh" height="450" style="border:0;" allowfullscreen="" loading="lazy"  class="app__img" ></iframe>
                    </center>
                </div>
            </section>
        </main>

        <!--========== FOOTER ==========-->
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