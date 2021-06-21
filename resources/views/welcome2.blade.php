<!DOCTYPE html>
<!-- Tolong jangan di hack-->
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ config('app.name') }} | Selamat Datang</title>
        {{-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> --}}
        <!-- Core theme CSS (includes Bootstrap)-->
        @include('layouts.css')
        {{-- custom css --}}
        <style>
            .myButton {
                box-shadow: 0px 10px 14px -7px #9fb4f2;
                background:linear-gradient(to bottom, #7892c2 5%, #476e9e 100%);
                background-color:#7892c2;
                border-radius:8px;
                display:inline-block;
                cursor:pointer;
                color:#ffffff;
                font-family:Arial;
                font-size:20px;
                font-weight:bold;
                padding:0px 35px;
                text-decoration:none;
                text-shadow:0px 1px 0px #283966;
            }
            .myButton:hover {
                background:linear-gradient(to bottom, #476e9e 5%, #7892c2 100%);
                background-color:#476e9e;
            }
            .myButton:active {
                position:relative;
                top:1px;
            }
            .download {
                margin: 5%;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/styles2.css') }}" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js"
        integrity="sha512-VMsZqo0ar06BMtg0tPsdgRADvl0kDHpTbugCBBrL55KmucH6hP9zWdLIWY//OTfMnzz6xWQRxQqsUFefwHuHyg=="
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
        crossorigin="anonymous">
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
                                <p class="card-text">Melaporkan penerimaan gratifikasi secara tertulis melalui sarana elektronik.</p>
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
                <div class="row-1">
                    <center>
                    <form id="search">
                        <label for="nomor">Nomor Aduan:</label><br>
                        <input type="text" id="n" name="n" value="{{old('n')}}">
                        <input type="submit" value="Submit" class="myButton" id="button"><br>
                        {{-- <h5 id="hasil" class="hasil"></h5> --}}
                    </form>
                    @php
                        if (isset($_GET["n"])){
                        $nomor =  htmlspecialchars($_GET["n"]);
                        }
                        else{$nomor=null;}
                    @endphp
                    
                    <div class="hasil" style="text-align: center;">
                        
                        @if (isset($nomor) && isset($datas[$nomor]))
                            <h5>Aduan dengan nomor registrasi: {{ $nomor}}, saat ini berstatus: {{$datas[$nomor]}}</h5>
                        @else
                            @if (! isset($nomor)) 
                                {{""}}
                            @else
                                <h5> Nomor registrasi {{$nomor}} tidak ditemukan</h5>
                            @endif
                        @endif
                        
                    </div>
                    <div class="download">
                        <a href="{{asset('/docs/manual book wbs-pengadu.pdf')}}" download>
                            <button class="myButton"><i class="fa fa-download"></i> Manual Book</button>
                        </a>
                    </div>
                </center>
                </div>
            </div>
        </section>

        <section  id="penjelasan" class="bg-primary text-white"> 
            <div class="container">
                <div style="align-content: center">
                <h2>Kirim Pengaduan</h2></div>
                <div>
                    <ol>
                        <li>Klik tombol "Login", lalu isikan Username dan password Anda.</li>
                        <li>Jika Anda belum terdaftar, klik tombol "Register" dan
                            isikan data diri Anda lalu klik tombol "Register,<br />
                            maka Anda akan otomatis login ke Aplikasi.<br />
                            <ul>
                                <li>Buat <span style="font-weight: bold;">Nama
                                    Samaran (Username) </span>dan <span
                                    style="font-weight: bold;">Kata Sandi (password) </span>yang
                                    Anda ketahui sendiri.</li>
                                <li style="font-weight: bold;">Gunakan nama yang
                                    unik dan tidak menggambarkan
                                    identitas Anda</li>
                            </ul>
                        </li>
                        <li>Klik Menu "Pengaduan" untuk menambahkan pengaduan baru.</li>
                        <li>Klik Tombol "Tambah" untuk merekam pengaduan baru.</li>
                        <li>Isi form "Tambah Pengaduan" sesuai informasi yang Anda
                            ketahui, jangan lupa untuk menyertakan file bukti(dapat berbentuk foto
                            atau dokumen lain), lalu klik tombol "Submit"</li>
                        <li>Perhatikan baik-baik beberapa hal di bawah ini:
                            <ul style="font-weight: bold;">
                                <li>Pastikan informasi yang diberikan sedapat mungkin
                                    memenuhi unsur&nbsp;5W
                                    + 1H.</li>
                                </ul>
                        </li>
                        <li>Setelah itu Anda akan dibawa kembali ke halaman "Aduan"
                            dimana Anda dapat melihat aduan yang sudah anda buat.</li>
                        <li><span style="font-weight: bold;">Setiap aduan
                            yang telah
                            terdaftar memiliki nomor registrasi, Anda dapat menggunakan nomor
                            registrasi ini untuk memonitor status/tindak lanjut pengaduan yang Anda
                            sampaikan.</span></li>
                        <li><span style="font-weight: bold;">Apabila
                            pengaduan yang Anda sampaikan
                            belum memenuhi kriteria untuk ditindaklanjuti</span><span
                            style="font-weight: bold;">, Inspektorat
                            Kota Bontang akan menghubungi Anda melalui nomor HP yang telah Anda
                            cantumkan dalam Form Pendaftaran.</span></li>
                    </ol>
                </div>
                

            </div>
            
                

        </section>
            <div class="container">
        <div class="row">
            <div class="col mt-5">
                <div class="card">
                    <div class="card-header"><i class="fa fa-download" aria-hidden="true"></i>  Total Laporan Masuk</div>
                    <div class="card-body justify-content-start"> {{$totalLaporan}} </div>
                </div>
            </div>
            <div class="col mt-5">
                <div class="card">
                    <div class="card-header"><i class="fa fa-clock" aria-hidden="true"></i>  Rata-rata Durasi Penyelesaian</div>
                    <div class="card-body">{{$avgDone}}</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-calendar" aria-hidden="true"></i>  Jumlah Laporan PerBulan Tahun {{date('   Y')}}
                    </div>
                    <div class="card-body">
                        {{-- <blockquote class="blockquote mb-0"> --}}
                        <div style="width:100%;">
                            {!! $lineChart->render() !!}
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col my-6">
                
                <div class="card">
                    <div class="card-header">
                        Laporan Berdasarkan Jenis Pelanggaran
                    </div>
                    <div class="card-body">
                        <div>
                            {!! $barChart->render() !!}
                        </div>
                    </div>
                </div>   
            </div>
            <div class="col my-6">
                <div class="card">
                    <div class="card-header">
                        Laporan Berdasarkan Status
                    </div>
                    <div class="card-body">
                        <div>
                            {!! $pieChart->render() !!}
                        </div>
                    </div>
                </div> 
            </div>
        </div>
            
        
    </div
        <section>

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
