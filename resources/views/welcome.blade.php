@extends('layouts.app')

@section('content')
<!-- Start Main Banner Area -->
<div class="main-banner">
    <div class="container">
        <div class="row align-items-center m-0">
            <div class="col-lg-6 p-0">
                <div class="main-banner-content">
                    <span class="sub-title"><i class="flaticon-wifi-signal"></i> Servicio de banda ancha de {{ config('app.name','INTERNET') }}</span>
                    <h2 class="text-white">Servicio de <strong class="text-warning">INTERNET</strong> al alcance de todos</h2>
                    <p>
                        Los mejores planes lo encuentras con nosotros
                    </p>

                    <div class="price">
                        $19.99 <span>/mes</span>
                    </div>

                    <div class="btn-box">
                        <a href="{{ route('precios') }}" class="btn btn-primary">Solicitar presupuesto</a>

                        <a href="https://www.youtube.com/watch?v=3hpmkruZSiM" class="video-btn popup-youtube"><i class="flaticon-multimedia"></i></a>
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

                    <h3>Internet Residencial</h3>

                    <p class="">
                        Servicio de internet residencial con capacidades desde 2Mbps, alta disponibilidad de ancho de banda con uan reventa de 2 a 1, con tiempos de instalacion de 24 Horas.
                    </p>

                    <div class="back-icon">
                        <i class="flaticon-speedometer"></i>
                    </div>

                    <a href="{{ route('servicios') }}" class="details-btn"><i class="flaticon-arrow-pointing-to-right"></i></a>

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

                    <h3>Internet Dedicado</h3>

                    <p>
                            Servicio de internet para comercios o empresas con capacidades desde 1Mbps, alta disponibilidad de ancho de banda con una reventa de 1 a 1, con tiempos de instalacion de 48 Horas
                    </p>

                    <div class="back-icon">
                        <i class="flaticon-speedometer-1"></i>
                    </div>

                    <a href="{{ route('servicios') }}" class="details-btn"><i class="flaticon-arrow-pointing-to-right"></i></a>

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

                    <p>
                        La velocidad con la cuál nuestro equipo contesta a las preguntas y solicitudes de nuestros clientes, mediante soporte en línea, establece las satisfación de nuestros clientes
                    </p>

                    <div class="back-icon">
                        <i class="flaticon-support"></i>
                    </div>

                    <a href="{{ route('servicios') }}" class="details-btn"><i class="flaticon-arrow-pointing-to-right"></i></a>

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
                    <h2>
                        PROVEEMOS A NUESTROS CLIENTES Y USUARIOS DEL ECUADOR
                    </h2>
                    <p>
                        Productos y servicios telecomunicacionales de calidad que le permitan conectarse al mundo de forma inmediata, permanente y sin límite de cobertura.
                    </p>

                    <a href="{{ route('servicios') }}" class="btn btn-primary">Aprende más</a>
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
                    <a href="#">+(593) 939151912</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="cta-btn">
                    <a href="{{ route('soporteEnLinea') }}" class="btn btn-primary">Soporte en línea</a>
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
                
                <span>{{ config('app.name','INTERNET') }} COBERTURA</span>
            </span>
            <h2>Cobertura total dentro y fuera de la ciudad</h2>
        </div>

        <div id="map"></div>
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

    <script>

        // The following example creates complex markers to indicate beaches near
        // Sydney, NSW, Australia. Note that the anchor is set to (0,32) to correspond
        // to the base of the flagpole.
    
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: {lat: -0.896140, lng: -79.109853}
            
            
            });
    
            setMarkers(map);
        }
    
        // Data for the markers consisting of a name, a LatLng and a zIndex for the
        // order in which these markers should display on top of each other.
        var beaches = [
            ['La Esperanza', -0.916108, -79.058003, 6],
            ['Macuchi', -0.930789, -79.047611, 5],
            ['Guayacán', -0.871874, -79.158176, 4],
            ['El Moral', -0.942266, -79.270814, 3],
            ['El Carmén', -0.932441, -79.223150, 2],
            ['Sarahuasi', -0.875103, -79.022735, 1]
        ];
    
        function setMarkers(map) {
            // Adds markers to the map.
    
            // Marker sizes are expressed as a Size of X,Y where the origin of the image
            // (0,0) is located in the top left of the image.
    
            // Origins, anchor positions and coordinates of the marker increase in the X
            // direction to the right and in the Y direction down.
            var image = {
            url: "{{ asset('assets/img/difussion.png') }}",
            // This marker is 20 pixels wide by 32 pixels high.
            size: new google.maps.Size(20, 32),
            // The origin for this image is (0, 0).
            origin: new google.maps.Point(0, 0),
            // The anchor for this image is the base of the flagpole at (0, 32).
            anchor: new google.maps.Point(0, 32)
            };
            // Shapes define the clickable region of the icon. The type defines an HTML
            // <area> element 'poly' which traces out a polygon as a series of X,Y points.
            // The final coordinate closes the poly by connecting to the first coordinate.
            var shape = {
            coords: [1, 1, 1, 20, 18, 20, 18, 1],
            type: 'poly'
            };
            for (var i = 0; i < beaches.length; i++) {
            var beach = beaches[i];
            var marker = new google.maps.Marker({
                position: {lat: beach[1], lng: beach[2]},
                map: map,
                icon: image,
                shape: shape,
                title: beach[0],
                zIndex: beach[3]
            });
            }
        }
    </script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0Ko6qUa0EFuDWr77BpNJOdxD-QLstjBk&callback=initMap">
    </script>
@endprepend


@endsection
