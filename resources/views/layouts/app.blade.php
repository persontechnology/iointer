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

        <script>
            $.extend( true, $.fn.dataTable.defaults, {
                "language":{
                    {
                        "sProcessing":     "Procesando...",
                        "sLengthMenu":     "Mostrar _MENU_ registros",
                        "sZeroRecords":    "No se encontraron resultados",
                        "sEmptyTable":     "Ningún dato disponible en esta tabla =(",
                        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                        "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                        "sInfoPostFix":    "",
                        "sSearch":         "Buscar:",
                        "sUrl":            "",
                        "sInfoThousands":  ",",
                        "sLoadingRecords": "Cargando...",
                        "oPaginate": {
                            "sFirst":    "Primero",
                            "sLast":     "Último",
                            "sNext":     "Siguiente",
                            "sPrevious": "Anterior"
                        },
                        "oAria": {
                            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        },
                        "buttons": {
                            "copy": "Copiar",
                            "colvis": "Visibilidad",
                            "export":"Exportar",
                            "print":"Imprimir"
                        }
                    }
                }
            } );
        </script>
        
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
                                <p><span>Llame ahora al:</span> <a href="#">+(593) 939151912</a></p>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-7">
                            <div class="top-header-right">
                                <div class="login-signup-btn">
                                    <p>
                                        <a href="{{ route('soporteEnLinea') }}" id="menuSoporteEnLinea">Soporte en linea</a>
                                    </p>
                                </div>
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
                            <img src="{{ asset('assets/img/logo.png') }}" alt="logo" width="45px" class="bg-white border border-danger">
                        </a>
                    </div>
                </div>

                <div class="bahama-nav">
                    <div class="container">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="logo" width="45px;" class="bg-white border border-danger">
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
                                <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo.png') }}" alt="image" class="bg-white border border-danger"></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Acerca de nosotros</h3>
<br>
                            <p class="text-justify">
                                Somos una empresa de telecomunicaciones proveedora de internet de Alta Velocidad a través de Radio Enlace hasta el hogar. Nuestro equipo está conformado por técnicos y personal altamente calificado.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Enlaces útiles</h3>

                            <ul class="links-widget-list">
                                <li><a href="https://www.speedtest.net/es" target="_blanck">Test de Velocidad</a></li>
                                <li><a href="https://www.arcotel.gob.ec/" target="_blanck">Arcotel</a></li>
                                <li><a href="https://www.telecomunicaciones.gob.ec/" target="_blanck">Mintel</a></li>
                                <li><a href="https://www.internetsociety.org/es/" target="_blanck">Internet society</a></li>
                                <li><a href="https://www.ecucert.gob.ec/" target="_blanck">Ecucert</a></li>
                                <li><a href="https://www.avast.com/es-ww/index#pc" target="_blanck">Avast</a></li>
                                
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Estar en contacto</h3>

                            <div class="widget-contact-info">
                                <p>
                                    <span>Tlf:(Servicio y soporte al cliente)</span>
                                    
                                    <a href="https://wa.me/593939151912" class="text-warning" target="_blank">
                                    <strong>+(593) 939151912</strong></a>
                                    <span>Email:</span>
                                    <strong class="text-warning">patonet.isp@gmail.com</strong> <br>
                                    
                                    
                                    LA MANÁ-ECUADOR
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