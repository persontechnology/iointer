@extends('layouts.app')

@section('content')
<!-- Start Main Banner Area -->
<div class="main-banner">
    <div class="container">
        <div class="row align-items-center m-0">
            <div class="col-lg-6 p-0">
                <div class="main-banner-content">
                    <span class="sub-title"><i class="flaticon-wifi-signal"></i> Servicio de banda ancha de {{ config('app.name','INTERNET') }}</span>
                    <h1>Creado para el servicio de Internet</h1>
                    <p>
                        Los mejores planes lo encuentras con nosotros
                    </p>

                    <div class="price">
                        $24.99 <span>/mes</span>
                    </div>

                    <div class="btn-box">
                        <a href="#" class="btn btn-primary">Solicitar presupuesto</a>

                        <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="video-btn popup-youtube"><i class="flaticon-multimedia"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 p-0">
                <div class="banner-image">
                    <img src="{{ asset('assets/img/banner-img1.png') }}" alt="image">
                </div>
            </div>
        </div>
    </div>

    <div class="shape-img1"><img src="{{ asset('assets/img/shape-image/1.png') }}" alt="imgae"></div>
</div>
<!-- End Main Banner Area -->

<!-- Start Features Area -->
<section class="features-area bg-image ptb-100">
    <div class="container">
        <div class="section-title">
            <span>
                <span class="icon">
                    <i class="flaticon-wifi"></i>
                </span>
                
                <span>{{ config('app.name','INTERNET') }} Características</span>
            </span>
            <h2>
                Somos una empresa proveedora de servicios de internet en Ecuador
            </h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-features-box">
                    <div class="icon">
                        <i class="flaticon-speedometer"></i>
                    </div>

                    <h3>DESCARGAR 1Gbps</h3>

                    <p>Lorem ipsum dolor sit do eiusmod sit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>

                    <div class="back-icon">
                        <i class="flaticon-speedometer"></i>
                    </div>

                    <a href="#" class="details-btn"><i class="flaticon-arrow-pointing-to-right"></i></a>

                    <div class="image-box">
                        <img src="{{ asset('assets/img/shape-image/2.png') }}" alt="image">
                        <img src="{{ asset('assets/img/shape-image/2.png') }}" alt="image">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-features-box">
                    <div class="icon">
                        <i class="flaticon-speedometer-1"></i>
                    </div>

                    <h3>99% Internet Uptime</h3>

                    <p>Lorem ipsum dolor sit do eiusmod sit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>

                    <div class="back-icon">
                        <i class="flaticon-speedometer-1"></i>
                    </div>

                    <a href="#" class="details-btn"><i class="flaticon-arrow-pointing-to-right"></i></a>

                    <div class="image-box">
                        <img src="{{ asset('assets/img/shape-image/2.png') }}" alt="image">
                        <img src="{{ asset('assets/img/shape-image/2.png') }}" alt="image">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                <div class="single-features-box">
                    <div class="icon">
                        <i class="flaticon-support"></i>
                    </div>

                    <h3>Atención al cliente 24/7</h3>

                    <p>Lorem ipsum dolor sit do eiusmod sit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>

                    <div class="back-icon">
                        <i class="flaticon-support"></i>
                    </div>

                    <a href="#" class="details-btn"><i class="flaticon-arrow-pointing-to-right"></i></a>

                    <div class="image-box">
                        <img src="{{ asset('assets/img/shape-image/2.png') }}" alt="image">
                        <img src="{{ asset('assets/img/shape-image/2.png') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Features Area -->

<!-- Start About Area -->
<section class="about-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-content">
                    <span class="sub-title"><i class="flaticon-care-about-environment"></i> Sobre {{ config('app.name','INTERNET') }}</span>
                    <h2>Experimenta la magia de la tecnología para servirte mejor</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisseLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>

                    <a href="#" class="btn btn-primary">Aprende más</a>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="about-image">
                    <img src="{{ asset('assets/img/about-img1.png') }}" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->

@include('estaticas.servicio')

@include('estaticas.planes')
@include('estaticas.preguntas')


<!-- Start CTA Area -->
<section class="cta-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-12">
                <div class="cta-content">
                    <h3>Llámenos ahora para conectar {{ config('app.name','INTERNET') }}</h3>
                    <a href="#">+(593) 123456789</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="cta-btn">
                    <a href="#" class="btn btn-primary">Verifique la cobertura en su área</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End CTA Area -->

<!-- Start Blog Area -->
<section class="blog-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>
                <span class="icon">
                    <i class="flaticon-wifi-1"></i>
                </span>
                
                <span>{{ config('app.name','INTERNET') }} Actualización de las noticias</span>
            </span>
            <h2>Lo que viene la actualización de noticia</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <a href="#" class="post-image"><img src="{{ asset('assets/img/blog-img1.jpg') }}" alt="blog-image"></a>

                    <div class="blog-post-content">
                        <ul>
                            <li><i class="fas fa-user-tie"></i> <a href="#">Administración</a></li>
                            <li><i class="far fa-clock"></i> 23 de Enero de 2019</li>
                        </ul>
                        <h3><a href="#">Usé la web por un día con un presupuesto de 50 MB</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi turpis massa, dapibus nec libero vitae.</p>

                        <a href="#" class="read-more-btn">Lee mas <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <a href="#" class="post-image"><img src="{{ asset('assets/img/blog-img2.jpg') }}" alt="blog-image"></a>

                    <div class="blog-post-content">
                        <ul>
                            <li><i class="fas fa-user-tie"></i> <a href="#">Administración</a></li>
                            <li><i class="far fa-clock"></i> 23 de Enero de 2019</li>
                        </ul>
                        <h3><a href="#">El consejo de liderazgo más difícil de seguir</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi turpis massa, dapibus nec libero vitae.</p>

                        <a href="#" class="read-more-btn">Lee mas <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="single-blog-post">
                    <a href="#" class="post-image"><img src="{{ asset('assets/img/blog-img3.jpg') }}" alt="blog-image"></a>

                    <div class="blog-post-content">
                        <ul>
                            <li><i class="fas fa-user-tie"></i> <a href="#">Administración</a></li>
                            <li><i class="far fa-clock"></i> 23 de Enero de 2019</li>
                        </ul>
                        <h3><a href="#">Las nuevas aplicaciones de negocios más populares</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi turpis massa, dapibus nec libero vitae.</p>

                        <a href="#" class="read-more-btn">Lee mas <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Area -->


@push('linksCabeza')
    <script>

    </script>
@endpush
@prepend('linksPie')
    <script>
    $('#menuInicio').addClass('active');  
    </script>
@endprepend


@endsection
