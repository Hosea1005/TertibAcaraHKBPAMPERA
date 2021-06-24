<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
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
                <a href="/home" class="nav__logo">HKBP AMPERA</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
               {{ __('Logout') }}
           </a>

           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               @csrf
           </form>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <div class="container" style="margin-top: 10%">
            <form action="/home/ta/edittertibacara/{{ $tata->id }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="form-group">
                    <label>Nama Minggu</label>
                    <input type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="n_minggu" value="{{ $tata->n_minggu }}" required>
                  </div>
                  <div class="form-group">
                    <label>Date</label>
                    <input type="date" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="date" value="{{ $tata->date }}" required>
                  </div>
                  <div class="form-group">
                    <label><label for=""></label></label>

                  </div>
                <label class="form-label">Ende (1)</label>
                <input type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="e1" value="{{ $tata->e1 }}" required>
                <div id="passwordHelpBlock" class="form-text">
                Contoh inputan : BE. NO.574:1-3
                </div>
                <div class="form-group">
                    <label>Isi Ende (1)</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="le1"  required>{{ $tata->le1 }}</textarea>
                  </div>
                  <label class="form-label">Ende (2)</label>
                <input type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="e2" value="{{ $tata->e2 }}" required>
                <div id="passwordHelpBlock" class="form-text">
                Contoh inputan : BE. NO.574:1-3
                </div>
                <div class="form-group">
                    <label>Isi Ende (2)</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="le2" required>{{ $tata->le2 }}</textarea>
                  </div>
                  <label class="form-label">Ende (3)</label>
                <input type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="e3" value="{{ $tata->e3 }}" required>
                <div id="passwordHelpBlock" class="form-text">
                Contoh inputan : BE. NO.574:1-3
                </div>
                <div class="form-group">
                    <label>Isi Ende (3)</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="le3"  required>{{ $tata->le3 }}</textarea>
                  </div>

                  <div class="form-group">
                    <label>Epistel</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="epistel" required>{{ $tata->epistel }}</textarea>
                  </div>

                  <label class="form-label">Ende (4)</label>
                <input type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="e4" value="{{ $tata->e4 }}" required>
                <div id="passwordHelpBlock" class="form-text">
                Contoh inputan : BE. NO.574:1-3
                </div>
                <div class="form-group">
                    <label>Isi Ende (4)</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="le4" required>{{ $tata->le4 }}</textarea>
                  </div>

                  <label class="form-label">Ende (5)</label>
                <input type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="e5" value="{{ $tata->e5 }}" required>
                <div id="passwordHelpBlock" class="form-text">
                Contoh inputan : BE. NO.574:1-3
                </div>
                <div class="form-group">
                    <label>Isi Ende (5)</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="le5"  required>{{ $tata->le5 }}</textarea>
                  </div>

                  <label class="form-label">Ende (6)</label>
                <input type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="e6" value="{{ $tata->e6 }}" required>
                <div id="passwordHelpBlock" class="form-text">
                Contoh inputan : BE. NO.574:1-3
                </div>
                <div class="form-group">
                    <label>Isi Ende (6)</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="le6" required>{{ $tata->le6 }}</textarea>
                  </div>

                  <div class="form-group">
                    <label>Jamita</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="jamita"  required>{{ $tata->jamita }}</textarea>
                  </div>

                  <label class="form-label">Ende (7)</label>
                <input type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="e7" value="{{ $tata->e7 }}" required>
                <div id="passwordHelpBlock" class="form-text">
                Contoh inputan : BE. NO.574:1-3
                </div>
                <div class="form-group">
                    <label>Isi Ende (7)</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="le7" required>{{ $tata->le7 }}</textarea>
                  </div>
                  <div class="form-group">
                    <label>Jenis Tata Tertib</label>
                    <select class="form-select" aria-label="Default select example" required name="status" value="{{ $tata->status }}">
                        <option selected>Pilihan anda</option>
                        <option value="1">Mingguan</option>
                        <option value="2">Natal</option>
                        <option value="3">Paskah</option>
                        <option value="4">Jumat Agung</option>
                        <option value="5">Kenaikan Yesus</option>
                        <option value="6">Pentakosta</option>
                      </select>
                  </div>

                  <button class="btn btn-success float-right">Save</button>
            </form>
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
