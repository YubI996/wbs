<!DOCTYPE html>
<!-- Tolong jangan di hack-->
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ config('app.name') }} | Selamat Datang</title>
        <link rel="icon" type="image/x-icon" href={{asset('wbs-favico.png')}} />
        <!-- Core theme CSS (includes Bootstrap)-->
        @include('layouts.css')
        {{-- custom css --}}
        <style>

        </style>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/styles2.css') }}" />
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" --}}

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js"
        integrity="sha512-VMsZqo0ar06BMtg0tPsdgRADvl0kDHpTbugCBBrL55KmucH6hP9zWdLIWY//OTfMnzz6xWQRxQqsUFefwHuHyg=="
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
        crossorigin="anonymous">
    </head>
    <body id="page-top">

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-grad fixed-top" id="mainNav">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <img src="{{asset('/img/kutim.png')}}" height="40rem" width="40rem" alt="logo_Kutim">
                    </div>
                    <div class="col">

                        <a class="navbar-brand js-scroll-trigger" href="#page-top"> <strong> Inspektorat Daerah Kabupaten Kutai Timur</strong></a>
                    </div>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <div class="btn-group">
                            <li class="nav-item">
                                <a href="" class="nav-link js-scroll-trigger  dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profiles</a>
                                <div class="dropdown-menu">
                                    <a href="{{url('/profil_itda')}}" class="nav-link js-scroll-trigger dropdown-item">Inspektorat</a>
                                    <a href="{{url('/profil_inspektur')}}" class="nav-link js-scroll-trigger dropdown-item">Inspektur</a>
                                </div>
                            </li>
                        </div>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/login')}}">Login</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/register')}}">Register</a></li>
                        {{-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li> --}}
                    </ul>
                </div>
            </div>
        </nav>
        <header class="bg-kutim text-white">
            <div class="container text-center container-fluid">
                <div class= "row justify-content-between">
                    <div class="col">
                        <img class="" height="80%" width="80%" src="{{asset('/img/kutim.png')}}" alt="Logo-Kutim" srcset="">
                    </div>
                    <div class="col">
                        <img class="" height="85%" width="120%" src="{{asset('/img/bupati.png')}}" alt="foto-bupati" srcset="">
                    </div>
                    <div class="col">
                        <img class="mx-4" height="77%" width="80%" src="{{asset('/img/yasrin.png')}}" alt="foto-ysrn" srcset="">
                    </div>

                    {{-- <div class="col-8">
                        <h1>SELAMAT DATANG DI  WHISTLEBLOWING SYSTEM <br/>KOTA BONTANG</h1>
                        <p class="lead">Whistleblowing System adalah Aplikasi penyampaian / pengaduan dugaan
                            tindak pidana yang telah terjadi, sedang terjadi, atau akan terjadi
                            yang melibatkan Aparatur Sipil Negara dan/atau Pejabat Lain yang berkaitan
                            dengan dugaan tindak pidana yang dilakukan di lingkungan Pemerintah
                                Kota Bontang</p>
                    </div> --}
                </di> --}}
            </div>
        </header>
        <section id="front" class="bg-green text-black-50">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="card flex-md-row mb-4 box-shadow h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                                <strong class="d-inline-block mb-2 text-primary">Berita</strong>
                                <h3 class="mb-0">
                                    <a class="text-dark" href="{{url('/berita')}}">Sosialisasi Peraturan KPK</a>
                                </h3>
                                <div class="mb-1 text-muted">Sept 2020</div>
                                <p class="card-text mb-auto">Menindaklanjuti telah terbitnya Peraturan Komisi Pemberantasan Korupsi, Direktorat Pendaftaran dan Pemeriksaan LHKPN mengadakan sosialisasi melalui media daring.</p>
                                <a href="{{url('/berita')}}">Lanjutkan Membaca</a>
                            </div>
                            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
                                alt="Thumbnail [200x250]"
                                src="{{asset('/img/biruD34.jpg')}}"
                                style="max-height: 100%; object-fit: contain"
                                {{-- src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17b9ebcad72%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17b9ebcad72%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.1953125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" --}}
                                data-holder-rendered="true">
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
                        <div class="card flex-md-row mb-4 box-shadow h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                                <strong class="d-inline-block mb-2 text-success">Design</strong>
                                <h3 class="mb-0">
                                    <a class="text-dark" href="https://getbootstrap.com/docs/4.0/examples/blog/#">Post title</a>
                                </h3>
                                <div class="mb-1 text-muted">Nov 11</div>
                                <p class="card-text mb-auto">This is a wider card with supporting text below as a natural
                                    lead-in to additional content.</p>
                                <a href="https://getbootstrap.com/docs/4.0/examples/blog/#">Continue reading</a>
                            </div>
                            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
                                alt="Thumbnail [200x250]"
                                src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17b9ebcad75%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17b9ebcad75%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.1953125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                data-holder-rendered="true" style="width: 200px; height: 250px;">
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; PemKab Kutai Timur 2021</p></div>
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
