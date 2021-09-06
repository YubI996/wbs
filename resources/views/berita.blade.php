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
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/login')}}">Login</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('/register')}}">Register</a></li>
                        {{-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li> --}}
                    </ul>
                </div>
            </div>
        </nav>
        {{-- <header class="bg-kutim text-white">
            <div class="container text-center container-fluid">
                <div class= "row justify-content-between">
                    <div class="col">
                        <img class="mr-4" height="80%" width="80%" src="{{asset('/img/kutim.png')}}" alt="Logo-Kutim" srcset="">
                    </div>
                    <div class="col">
                        <img class="ml-4" height="85%" width="100%" src="{{asset('/img/bupati.png')}}" alt="foto-bupati" srcset="">
                    </div>
                    <div class="col">
                        <img class="mx-4" height="77%" width="80%" src="{{asset('/img/yasrin.png')}}" alt="foto-ysrn" srcset="">
                    </div>
            </div>
        </header> --}}
        <section id="front" class="bg-green text-black-50">
            <main role="main" class="container bg-white">
        <div class="row">
            <div class="col-md-8 blog-main">
                <h3 class="pb-3 mb-4 font-italic border-bottom">
                    From the Firehose
                </h3>

                <div class="blog-post">
                    <h2 class="blog-post-title">Sample blog post</h2>
                    <p class="blog-post-meta">January 1, 2014 by <a
                            href="https://getbootstrap.com/docs/4.0/examples/blog/#">Mark</a></p>

                    <p>This blog post shows a few different types of content that's supported and styled with Bootstrap.
                        Basic typography, images, and code are all supported.</p>
                    <hr>
                    <p>Cum sociis natoque penatibus et magnis <a
                            href="https://getbootstrap.com/docs/4.0/examples/blog/#">dis parturient montes</a>, nascetur
                        ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                        Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                    <blockquote>
                        <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong>
                            ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </blockquote>
                    <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet
                        fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                    <h2>Heading</h2>
                    <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non
                        commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus,
                        porta ac consectetur ac, vestibulum at eros.</p>
                    <h3>Sub-heading</h3>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <pre><code>Example code block</code></pre>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.
                        Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
                    <h3>Sub-heading</h3>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean
                        lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce
                        dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit
                        amet risus.</p>
                    <ul>
                        <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                        <li>Donec id elit non mi porta gravida at eget metus.</li>
                        <li>Nulla vitae elit libero, a pharetra augue.</li>
                    </ul>
                    <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.
                    </p>
                    <ol>
                        <li>Vestibulum id ligula porta felis euismod semper.</li>
                        <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
                        <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
                    </ol>
                    <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
                </div><!-- /.blog-post -->

                <div class="blog-post">
                    <h2 class="blog-post-title">Another blog post</h2>
                    <p class="blog-post-meta">December 23, 2013 by <a
                            href="https://getbootstrap.com/docs/4.0/examples/blog/#">Jacob</a></p>

                    <p>Cum sociis natoque penatibus et magnis <a
                            href="https://getbootstrap.com/docs/4.0/examples/blog/#">dis parturient montes</a>, nascetur
                        ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                        Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                    <blockquote>
                        <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong>
                            ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </blockquote>
                    <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet
                        fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                    <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non
                        commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus,
                        porta ac consectetur ac, vestibulum at eros.</p>
                </div><!-- /.blog-post -->

                <div class="blog-post">
                    <h2 class="blog-post-title">New feature</h2>
                    <p class="blog-post-meta">December 14, 2013 by <a
                            href="https://getbootstrap.com/docs/4.0/examples/blog/#">Chris</a></p>

                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean
                        lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce
                        dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit
                        amet risus.</p>
                    <ul>
                        <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                        <li>Donec id elit non mi porta gravida at eget metus.</li>
                        <li>Nulla vitae elit libero, a pharetra augue.</li>
                    </ul>
                    <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet
                        fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                    <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.
                    </p>
                </div><!-- /.blog-post -->

                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary"
                        href="https://getbootstrap.com/docs/4.0/examples/blog/#">Older</a>
                    <a class="btn btn-outline-secondary disabled"
                        href="https://getbootstrap.com/docs/4.0/examples/blog/#">Newer</a>
                </nav>

            </div><!-- /.blog-main -->

            <aside class="col-md-4 blog-sidebar">
                <div class="p-3 mb-3 bg-light rounded">
                    <h4 class="font-italic">About</h4>
                    <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur
                        purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                </div>

                <div class="p-3">
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
                    </ol>
                </div>

                <div class="p-3">
                    <h4 class="font-italic">Elsewhere</h4>
                    <ol class="list-unstyled">
                        <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">GitHub</a></li>
                        <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">Twitter</a></li>
                        <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">Facebook</a></li>
                    </ol>
                </div>
            </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </main><!-- /.container -->
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
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
