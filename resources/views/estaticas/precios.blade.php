@extends('layouts.app')

@section('content')
<!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Nuestros precios</h2>
                <ul>
                    <li><a href="{{ url('/') }}">Inicio</a></li>
                    <li>Precios</li>
                </ul>
            </div>
        </div>
    </div>
<!-- End Page Title Area -->

@include('estaticas.planes')
@include('estaticas.acerca')

@push('linksCabeza')
    <script>

    </script>
@endpush
@prepend('linksPie')
    <script>
    $('#menuPrecios').addClass('active'); 
    $('#preciosDetalle').removeClass('extra-mb pb-0') 
    </script>
@endprepend
@endsection