@extends('layouts.app')

@section('content')
<!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Nuestro equipo</h2>
                <ul>
                    <li><a href="{{ url('/') }}">Inicio</a></li>
                    <li>Equipo</li>
                </ul>
            </div>
        </div>
    </div>
<!-- End Page Title Area -->

<!-- Start Team Area -->
<section class="team-area ptb-100">
    <div class="container">
        <div class="single-team-member">
            <div class="member-image">
                <img src="https://image.flaticon.com/icons/svg/1750/1750161.svg" alt="image" class="bg-secondary">
            </div>

            <div class="member-content">
                <h3>GRIGSON SALTOS</h3>
                <span>CEO y Fundador</span>

                <ul class="info">
                    <li><span>Experiencia:</span> 10 años</li>
                    <li><span>Teléfono:</span> <a href="#">+(593) 939090929</a></li>
                    <li><span>E-mail:</span> <a href="#">grigson.patonet@gmail.com</a></li>
                    <li><span>Ubicación:</span> LA MANÁ-ECUADOR</li>
                </ul>
            </div>
        </div>

        <div class="single-team-member">
            <div class="member-image">
                <img src="https://image.flaticon.com/icons/svg/1754/1754631.svg" alt="image" class="bg-secondary">
            </div>

            <div class="member-content">
                <h3>JOSSENKA CASTRO</h3>
                <span>Gerente General</span>

                <ul class="info">
                    <li><span>Experiencia:</span> 5 años</li>
                    <li><span>E-mail:</span> <a href="#">jossenka.patonet@gmail.com</a></li>
                    <li><span>Ubicación:</span> LA MANÁ-ECUADOR</li>
                </ul>

            </div>
        </div>

        <div class="single-team-member">
            <div class="member-image">
                <img src="https://image.flaticon.com/icons/svg/1067/1067617.svg" alt="image" class="bg-secondary">
            </div>

            <div class="member-content">
                <h3>LA MANÁ-ECUADOR</h3>
                <span>Soporte Técnico /Certificado en Mikrotik</span>

                <ul class="info">
                    <li><span>Experiencia:</span> 5 años</li>
                    <li><span>E-mail:</span> <a href="#">wilzon.patonet@gmail.com</a></li>
                    <li><span>Ubicación:</span> GUAYAQUIL-ECUADOR</li>
                </ul>

            </div>
        </div>

        <div class="single-team-member">
            <div class="member-image">
                <img src="https://image.flaticon.com/icons/svg/1390/1390798.svg" alt="image" class="bg-secondary">
            </div>

            <div class="member-content">
                <h3>ELIAN VERA</h3>
                <span>Soporte Técnico</span>

                <ul class="info">
                    <li><span>Experiencia:</span> 1 años</li>
                    <li><span>E-mail:</span> <a href="#">elian.patonet@gmail.com</a></li>
                    <li><span>Ubicación:</span> GUAYAQUIL-ECUADOR</li>
                </ul>

            </div>
        </div>

        <div class="single-team-member">
            <div class="member-image">
                <img src="https://image.flaticon.com/icons/svg/1995/1995613.svg" alt="image" class="bg-secondary">
            </div>

            <div class="member-content">
                <h3>ESTEFANIA ESPIN</h3>
                <span>Secretaria</span>

                <ul class="info">
                    <li><span>Experiencia:</span> 5 años</li>
                    <li><span>E-mail:</span> <a href="#">estefania.patonet@gmail.com</a></li>
                    <li><span>Ubicación:</span> GUAYAQUIL-ECUADOR</li>
                </ul>

            </div>
        </div>
    </div>
</section>
<!-- End Team Area -->

@push('linksCabeza')
    <script>

    </script>
@endpush
@prepend('linksPie')
    <script>
    $('#menuEquipo').addClass('active');  
    </script>
@endprepend
@endsection