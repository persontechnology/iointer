@extends('layouts.app')

@section('content')
<!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Preguntas frecuentes</h2>
                <ul>
                    <li><a href="{{ url('/') }}">Inicio</a></li>
                    <li>Preguntas</li>
                </ul>
            </div>
        </div>
    </div>
<!-- End Page Title Area -->

@include('estaticas.preguntas')

@push('linksCabeza')
    <script>

    </script>
@endpush
@prepend('linksPie')
    <script>
    $('#menuPreguntas').addClass('active');  
    $('#preguntaDetalle').removeClass('extra-pt')
    </script>
@endprepend
@endsection