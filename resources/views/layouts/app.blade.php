<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">

        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
        <script src="{{ asset('assets/js/notify.min.js') }}"></script>
        @stack('linksCabeza')
    </head>

    <body>

        <!-- Start Preloader Area -->
        <div class="preloader">
            <div class="spinner"></div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Header Area -->
        <header class="header-area">
            <div class="top-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-5">
                            <div class="top-header-left">
                                <p><span>Llame ahora al:</span> <a href="#">+(593) 123456789</a></p>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-7">
                            <div class="top-header-right">
                                <ul class="social">
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Start Navbar Area -->
            <div class="navbar-area">
                <div class="bahama-mobile-nav">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
                        </a>
                    </div>
                </div>

                <div class="bahama-nav">
                    <div class="container">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
                            </a>

                            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    @include('layouts.menu')
                                </ul>

                                <div class="others-options">
                                    

                                    @guest
                                        
                                        <a class="btn btn-warning" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        
                                        {{--  @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif  --}}
                                    @else
                                        
                                        <a class="btn btn-danger" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    @endguest

                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- End Navbar Area -->
        </header>
        <!-- End Header Area -->

        @yield('breadcrumbs')

        @if ($errors->any())

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Solucione los siguentes errores!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @foreach (['success', 'warn', 'info', 'error'] as $msg)
            @if(Session::has($msg))
            <script>
                $.notify("{{ Session::get($msg) }}", "{{ $msg }}");
            </script>
            @endif
        @endforeach
                
        @yield('content')

        <!-- Start Footer Area -->
        <footer class="footer-area">
            
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="logo">
                                <a href="#"><img src="{{ asset('assets/img/logo.png') }}" alt="image"></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sda.</p>
                            </div>

                            <form class="newsletter-form" data-toggle="validator">
                                <input type="email" class="newsletter-input" placeholder="Tu correo eléctronico" name="EMAIL" required autocomplete="off">
                                <button type="submit"><i class="flaticon-paper-plane"></i></button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Servicios al cliente</h3>

                            <ul class="services-widget-list">
                                <li><a href="#">Mi {{ config('app.name','INTERNET') }}</a></li>
                                <li><a href="#">{{ config('app.name','INTERNET') }} Media</a></li>
                                <li><a href="#">Conexión y configuración</a></li>
                                <li><a href="#">Soporte</a></li>
                                <li><a href="#">Videos tutoriales</a></li>
                                <li><a href="#">{{ config('app.name','INTERNET') }} Aplicación</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Enlaces útiles</h3>

                            <ul class="links-widget-list">
                                <li><a href="#">Mapa de cobertura</a></li>
                                <li><a href="#">Noticias</a></li>
                                <li><a href="#">Términos y Condiciones</a></li>
                                <li><a href="#">Licencia</a></li>
                                <li><a href="#">Testimonios</a></li>
                                <li><a href="#">Nuestros Patrocinadores</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Estar en contacto</h3>

                            <div class="widget-contact-info">
                                <p>
                                    <a href="#">+(593) 123456789</a>
                                    <span>(Servicio y soporte al cliente)</span>
                                    <a href="#">+(593) 123456789</a>
                                    <span>(Para nuevo clientes)</span>
                                    LATACUNGA-ECUADOR
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="copyright-area">
                <div class="container">
                    <p><i class="far fa-copyright"></i> Copyright {{ config('app.name','INTERNET') }} {{ date('Y') }} Todos los derechos reservados</p>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->

        <div class="go-top"><i class="fas fa-arrow-up"></i></div>

        
        <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/parallax.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
        @stack('linksPie')

        <script>
            $('[data-toggle="tooltip"]').tooltip()
            $('table').on('draw.dt', function() {
                $('[data-toggle="tooltip"]').tooltip();
            })



            function eliminar(arg){
                var url=$(arg).data('url');
                var msg=$(arg).data('title');
                $.confirm({
                    title: 'Confirme!',
                    content: msg,
                    theme: 'modern',
                    type:'red',
                    icon:'fas fa-exclamation-triangle',
                    closeIcon:true,
                    buttons: {
                        confirmar: function () {
                            location.replace(url);
                        }
                    }
                });
            }
        
        </script>
    </body>
</html>