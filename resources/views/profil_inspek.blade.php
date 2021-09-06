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
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-grad fixed-top" id="mainNav">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <img src="{{asset('/img/kutim.png')}}" height="40rem" width="40rem" alt="logo_Kutim">
                    </div>
                    <div class="col">

                        <a class="navbar-brand js-scroll-trigger" href="{{url('/')}}"> <strong> Inspektorat Daerah Kabupaten Kutai Timur</strong></a>
                    </div>
                </div>

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
    </head>
    <body id="page-top">



        <main role="main" class="container bg-white main">
            <div class="d-flex justify-content-center align-items-stretch pt-3 m-5">
                    {{-- <embed src="{{asset('/docs/profil_itda.pdf')}}" type="application/pdf" width="2000em" height="825em" /> --}}
                    <img src="{{asset('/img/propil1.jpg')}}" alt="Profil Inspektur Daerah" sizes="(max-width: 600px) 2000em, 825em" srcset="">
                </div>
            {{-- <div class="row">
                <div class="col-10 blog-main w-100 p-1">

                </div><!-- /.blog-main -->

                {{-- <aside class="col-2 blog-sidebar">
                    <div class="p-3 mb-3 bg-light rounded m-1">
                        <h4 class="font-italic">About</h4>
                        <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur
                            purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                    </div>

                    <div class="p-3 m-1">
                        <h4 class="font-italic">Archives</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">March 2014</a></li>
                            <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">February 2014</a></li>
                            <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">January 2014</a></li>
                            <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">December 2013</a></li>
                            <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">November 2013</a></li>
                            <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">October 2013</a></li>
                            <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">September 2013</a></li>
                            <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">August 2013</a></li>
                            <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">July 2013</a></li>
                            <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">June 2013</a></li>
                            <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">May 2013</a></li>
                            <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">April 2013</a></li>
                            <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">April 2013</a></li>
                        </ol>
                    </div>

                    <div class="p-3 m-1">
                        <h4 class="font-italic">Elsewhere</h4>
                        <ol class="list-unstyled">
                            <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">GitHub</a></li>
                            <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">Twitter</a></li>
                            <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">Facebook</a></li>
                        </ol>
                    </div>
                </aside><!-- /.blog-sidebar --> -}}

            </div><!-- /.row --> --}}

        </main><!-- /.container -->
        <!-- Footer-->

    </body>
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
</html>
