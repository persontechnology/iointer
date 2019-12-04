@extends('layouts.app')

@section('breadcrumbs', Breadcrumbs::render('chatSolucion',$soporte))
@section('content')



<!-- Start About Area -->
<section class="about-area mt-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="about-content">
                    
                        <div class="card">
                            <div class="card-header bg-info">
                                Información de cliente
                            </div>
                            <div class="card-body">
                                    
                                    <div class="form-group row">
                                        <label for="nombres" class="col-md-4 col-form-label text-md-right">Nombres<i class="text-danger">*</i></label>
            
                                        <div class="col-md-6">
                                            <input id="nombres" type="text" class="form-control @error('nombres') is-invalid @enderror" name="nombres" value="{{ $soporte->nombres }}" required autocomplete="nombres" autofocus disabled>
            
                                            @error('nombres')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="apellidos" class="col-md-4 col-form-label text-md-right">Apellidos<i class="text-danger">*</i></label>
            
                                        <div class="col-md-6">
                                            <input id="apellidos" type="text" class="form-control @error('apellidos') is-invalid @enderror" name="apellidos" value="{{ $soporte->apellidos }}" required autocomplete="apellidos" disabled>
            
                                            @error('apellidos')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
        
                                    <div class="form-group row">
                                        <label for="cedula" class="col-md-4 col-form-label text-md-right">Cédula<i class="text-danger">*</i></label>
            
                                        <div class="col-md-6">
                                            <input id="cedula" type="number" class="form-control @error('cedula') is-invalid @enderror" name="cedula" value="{{ $soporte->cedula }}" required autocomplete="cedula" disabled>
            
                                            @error('cedula')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
        
                                    <div class="form-group row">
                                        <label for="telefono" class="col-md-4 col-form-label text-md-right">Teléfono<i class="text-danger">*</i></label>
            
                                        <div class="col-md-6">
                                            <input id="telefono" type="number" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ $soporte->telefono }}" autocomplete="telefono" required disabled>
            
                                            @error('telefono')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
        
        
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">Email<i class="text-danger">*</i></label>
            
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $soporte->email }}" autocomplete="email" required disabled>
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
        
                                    <div class="form-group row">
                                        <label for="direccion" class="col-md-4 col-form-label text-md-right">Dirección<i class="text-danger">*</i> </label>
            
                                        <div class="col-md-6">
                                            <input id="direccion" type="direccion" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ $soporte->direccion }}" autocomplete="direccion" required disabled>
                                            
                                            @error('direccion')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-md-4 col-form-label text-md-right">Latitud y Longitud<i class="text-danger">*</i> </label>
            
                                        <div class="col-md-6">
                                            <input type="text" id="lat" name="lat" value="{{ $soporte->lat }}" class="form-control" required disabled>
                                            <input type="text" id="lng" name="lng" value="{{ $soporte->lng }}" class="form-control mt-1" required disabled>
                                        </div>
                                    </div>
                                    
        
                                    <hr>
                                    <label for="">Selecione ubicación <i class="fas fa-level-down-alt"></i></label>
                                    <div id="map"></div>
                                    
                            </div>
                            
                        </div>
                    
                </div>
            </div>
            <div class="col-md-8">

                <form action="{{ route('guardaChatAdmin') }}" id="signupForm" method="POST">
                    @csrf
                    <input type="hidden" name="soporte" value="{{ $soporte->id }}">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Ingrese mensaje" name="mensaje" id="mensaje" aria-label="Recipient's username with two button addons" aria-describedby="button-addon4">
                        <div class="input-group-append" id="button-addon4">
                            <button class="btn btn-dark" type="submit">Enviar mensaje</button>
                            <button class="btn btn-secondary" type="button" onclick="cargar(this);">Actualizar mensajes</button>
                        </div>
                    </div>
                </form>
                <div id="cargarChat" class="scrollBbar"></div>
            </div>
            
        </div>
    </div>
</section>
<!-- End About Area -->


@push('linksCabeza')
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script>
            
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>

        <style>
                .scrollBbar 
                {
                    margin:4px, 4px; 
                    padding:4px; 
                    height: 800px; 
                    overflow-x: hidden; 
                    overflow-x: auto; 
                    text-align:justify; 
               }
        </style>

        
@endpush
@prepend('linksPie')
    

    <script>
    $('#menuSoporte').addClass('active');  

    

    function cargar(){
        $('#cargarChat').load("{{ route('cargarChat',$soporte->id) }}",function(){

        });
    }

    $( "#signupForm" ).validate( {
        rules: {
            mensaje: "required",
            
        },
        messages: {
            mensaje: "Por favor, ingrese el mensaje",
            
        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
            // Add the `invalid-feedback` class to the error element
            error.addClass( "invalid-feedback" );

            if ( element.prop( "type" ) === "checkbox" ) {
                error.insertAfter( element.next( "label" ) );
            } else {
                error.insertAfter( element );
            }
        },
        highlight: function ( element, errorClass, validClass ) {
            $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
        },
        unhighlight: function (element, errorClass, validClass) {
            $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
        },
        submitHandler: function (form) {
            $.post( form.action, $( form ).serialize() ).done(function(data){
               $('#mensaje') .val('');
                cargar();
                
            });
            return false;

        }
    } );

    cargar();

    setInterval(cargar, 5000);
    

    </script>


   





    <script>

            // The following example creates a marker in Stockholm, Sweden using a DROP
            // animation. Clicking on the marker will toggle the animation between a BOUNCE
            // animation and no animation.
        
            var marker;
        
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: {lat: -0.941839, lng: -79.231626}
                });
        
                marker = new google.maps.Marker({
                map: map,
                draggable: false,
                animation: google.maps.Animation.DROP,
                position: {lat: -0.941839, lng: -79.231626}
                });
                
                marker.addListener('drag', function(event){
                    $('#lat').val(event.latLng.lat());
                    $('#lng').val(event.latLng.lng());
                });
            }
        
        </script>
    
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0Ko6qUa0EFuDWr77BpNJOdxD-QLstjBk&callback=initMap">
        </script>
@endprepend
@endsection