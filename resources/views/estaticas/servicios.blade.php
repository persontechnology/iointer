@extends('layouts.app')

@section('content')
<!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Nuestro servicios</h2>
                <ul>
                    <li><a href="{{ url('/') }}">Inicio</a></li>
                    <li>Servicios</li>
                </ul>
            </div>
        </div>
    </div>
<!-- End Page Title Area -->

<!-- Start About Area -->
<section class="about-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-content">
                    <span class="sub-title"><i class="flaticon-care-about-environment"></i> Información</span>
                    <h2>Nuestro contacto de soporte lo contratará a tiempo</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisseLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>

                    <a href="#" class="btn btn-primary">Aprende más</a>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="about-image">
                    <img src="{{ asset('assets/img/about-img3.png') }}" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->

@include('estaticas.servicio')

<!-- Start Why Choose Us Area  -->
<section class="why-choose-us-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12">
                <div class="why-choose-us-content">
                    <span>NUestra aplicación</span>
                    <h2>Tomemos algo masivo de internet de {{ config('app.name','INTERNET') }}</h2>
                    <p>
                        La velocidad de los datos, a medida que viaja desde Internet a su computadora, se mide en megabits por segundo (Mbps). Diferentes actividades requieren diferentes velocidades.
                    </p>

                    <ul>
                        <li>50% de descuento en instalación profesional</li>
                        <li>10 horas de servicio de DVR en la nube</li>
                        <li>HD incluido</li>
                        <li>Velocidad buena para 6-8 dispositivos al mismo tiempo</li>
                    </ul>

                    <a href="#" class="btn btn-primary">Solicitar presupuesto</a>
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="why-choose-us-image">
                    <img src="{{ asset('assets/img/offer-img1.png') }}" alt="image">

                    <div class="text">
                        <div class="inner-text">
                            <span>Gastar</span>
                            <h3>$12.00</h3>
                            <span>Hasta</span>
                            <h3>$56.00</h3>
                            <span>Por segundo</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Why Choose Us Area  -->

@push('linksCabeza')
    <script>

    </script>
@endpush
@prepend('linksPie')
    <script>
    $('#menuServicios').addClass('active');  
    </script>
@endprepend
@endsection