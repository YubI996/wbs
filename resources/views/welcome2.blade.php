<!DOCTYPE html>
<!-- Tolong jangan di hack-->
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ config('app.name') }} | Selamat Datang</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        @include('layouts.css')
        {{-- custom css --}}
        
      <link rel="stylesheet" type="text/css" href="{{ asset('/css/styles2.css') }}" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Whistle Blowing System</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/login')}}">Login</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/register')}}">Register</a></li>
                        {{-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li> --}}
                    </ul>
                </div>
            </div>
        </nav>
        <header class="bg-primary text-white">
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <img src="{{asset('/img/logo-bontang.png')}}" width="250px" height="300px" alt="Logo-Kota-Bontang" srcset="">
                    </div>
                    <div class="col-8">
                        <h1>SELAMAT DATANG DI  WHISTLEBLOWING SYSTEM <br/>KOTA BONTANG</h1>
                        <p class="lead">Whistleblowing System adalah Aplikasi penyampaian / pengaduan dugaan
                             tindak pidana yang telah terjadi, sedang terjadi, atau akan terjadi
                              yang melibatkan Aparatur Sipil Negara dan/atau Pejabat Lain yang berkaitan
                               dengan dugaan tindak pidana yang dilakukan di lingkungan Pemerintah
                                Kota Bontang</p>
                    </div>
                </div>
            </div>
        </header>
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="card bayang1" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Kriteria <strong class="biru">Pengaduan</strong></h5><br>
                                <p class="card-text">Pangaduan Anda akan mudah ditindaklanjuti apabila memenuhi unsur sebagai<a href="#" class="card-link" data-toggle="modal" data-target="#kriteria"> berikut :</a></p>
                                <a href="#" class="card-link float-right"  data-toggle="modal" data-target="#kriteria"><i class="fas fa-arrow-right"></i></a>
                                </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card bayang2" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Kirim <strong class="hijau">Pengaduan</strong></h5><br>
                                <p class="card-text">Melaporkan penerimaan gratifikasi secara tertulis melalui sarana elektronik maupun non-elektronik.</p>
                                 <a href="{{url('/register')}}" class="card-link float-right"><i class="fas fa-arrow-right"></i></a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card bayang3" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Kerahasiaan <strong class="kuning">Pelapor</strong></h5><br>
                                <p class="card-text">Inspektorat merahasiakan identitas pribadi Anda sebagai pelapor(Whistleblower).</p>
                                <a href="#" class="card-link float-right"  data-toggle="modal" data-target="#rahasia"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Modals --}}
        {{-- kriteria --}}
        <div class="modal fade" id="kriteria" tabindex="-1" role="dialog" aria-labelledby="kriteriaLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="kriteriaLabel">Kriteria <strong class="biru">Pengaduan</strong></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <p>Pengaduan Anda akan mudah ditindak lanjuti apabila memenuhi unsur sebagai berikut :</p> 
                    <ol>
                        <li>
                            What        : Apa masalah yang diadukan.
                        </li>
                        <li>
                            Who     : Siapa pihak yang bertanggung jawab.
                        </li>
                        <li>
                            Where       : Di mana lokasi kejadian.
                        </li>
                        <li>
                            When        : Kapan waktu kejadian.
                        </li>
                        <li>
                            Why     : Mengapa penyimpangan terjadi.
                        </li>
                        <li>
                            How     : Bagaimana modus penyimpangan.
                        </li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Oke</button>
                </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="rahasia" tabindex="-1" role="dialog" aria-labelledby="rahasiaLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rahasiaLabel">Kerahasiaan <strong class="kuning">Pelapor</strong></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <h4> <p>Pemerintah Kota Bontang akan merahasiaskan identitas pribadi anda sebagai Whistleblower karena hanya fokus pada informasi yang Anda laporkan.</p></h4> 
                    <h4> <p> Whistleblower dalam menyampaikan pengaduan berhak mendapakan perlindungan dan penghargaan.</p></h4> 
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Oke</button>
                </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Pemkot Bontang 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ url('/js/scripts.js') }}"></script>

        <script>
        $('#myModal').on('shown.bs.modal', function () {
          $('#myInput').trigger('focus')
        })
        </script>
    </body>
</html>
