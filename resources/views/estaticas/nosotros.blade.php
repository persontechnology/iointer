@extends('layouts.app')

@section('content')
<!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Sobre nosotros</h2>
                <ul>
                    <li><a href="{{ url('/') }}">Inicio</a></li>
                    <li>Sobre nosotros</li>
                </ul>
            </div>
        </div>
    </div>
<!-- End Page Title Area -->
@include('estaticas.acerca')
@include('estaticas.cobertura')
@include('estaticas.planes')
@include('estaticas.preguntas')
@include('estaticas.loquedicen')
@include('estaticas.oferta')

@push('linksCabeza')
    <script>

    </script>
@endpush
@prepend('linksPie')
    <script>
    $('#menuNosotros').addClass('active');  
    </script>
@endprepend
@endsection