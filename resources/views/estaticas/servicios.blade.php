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
                    <span class="sub-title"><i class="flaticon-care-about-environment"></i> Servicios</span>
                    <h2>
                        Servicio de Internet Banda Ancha por Radio Enlace de Alta Velocidad
                    </h2>
                    <p>
                        Disponemos de servicio de Internet para: 
                    </p>
                    <ul>
                        <li>HOGAR</li>
                        <li>PYMES</li>
                        <li>CORPORATIVO</li>
                        <li>ENLACE DE DATOS</li>
                        <li>ENLACES DEDICADOS</li>
                        <li>ENTRE OTROS SERVICIOS</li>
                    </ul>
                    <p>
                        Proveedor del Servicio de Internet por Radio Enlace. Nuestro nodo principal nos permite llegar con internet a sitios alejados y desatendidos.
                    </p>
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
                    <span>Servicio Técnico de Computadoras</span>
                    <h2>
                        ¿Problemas con su Pc o Laptop?
                    </h2>
                    <p>
                        Realizamos mantenimiento preventivo y correctivo de tu computador, tenemos los mejores precios en repuestos y accesorios para tu Pc.
                    </p>

                    <ul>
                        <li>Reparación de Hardware</li>
                        <li>
                            Formateo y reinstalación del sistema operativo, disponemos de los siguientes sistemas operativos: 
                            <ol>
                                    <small><strong>Windows 7,8.1, 10</strong></small> <br>
                                    <small><strong>Mac OS X 10.14 macOS Mojave/Mac OS X 10.15 macOS Catalina</strong></small> <br>
                                    <small><strong>Ubuntu 16.5 / Fedora/ Kali Linux/Debian</strong></small>
                            </ol>
                        </li>
                        
                        
                        
                        <li>Instalación de Antivirus(Avast, Kaspersky, Norton )</li>
                        <li>Instalación del paquete de Ofimática (Word, Excel, Power Point, Acces, etc.)</li>
                        <li>Instalación de Juegos(GTA V, Call of Duty Black Op 4, Fifa 2020)</li>
                        <li>Instalación del paquete de Adobe(PhotoShop, Illustrator, Dreamweaver, Acrobat) </li>
                    </ul>

                    <a href="{{ route('precios') }}" class="btn btn-primary">Solicitar presupuesto</a>
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="why-choose-us-image">
                    <img src="{{ asset('assets/img/equipos/mantenimiento.jpg') }}" alt="image">
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