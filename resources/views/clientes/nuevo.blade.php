@extends('layouts.app')

@section('breadcrumbs', Breadcrumbs::render('nuevoCliente'))

@section('content')
<div class="container mt-2 mb-2">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="{{ route('guardarCliente') }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">
                        Nuevo cliente
                    </div>
                    <div class="card-body">
                            
                            <div class="form-group row">
                                <label for="nombres" class="col-md-4 col-form-label text-md-right">Nombres<i class="text-danger">*</i></label>
    
                                <div class="col-md-6">
                                    <input id="nombres" type="text" class="form-control @error('nombres') is-invalid @enderror" name="nombres" value="{{ old('nombres') }}" required autocomplete="nombres" autofocus>
    
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
                                    <input id="apellidos" type="text" class="form-control @error('apellidos') is-invalid @enderror" name="apellidos" value="{{ old('apellidos') }}" required autocomplete="apellidos">
    
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
                                    <input id="cedula" type="number" class="form-control @error('cedula') is-invalid @enderror" name="cedula" value="{{ old('cedula') }}" required autocomplete="cedula">
    
                                    @error('cedula')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telefono" class="col-md-4 col-form-label text-md-right">Teléfono</label>
    
                                <div class="col-md-6">
                                    <input id="telefono" type="number" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" autocomplete="telefono">
    
                                    @error('telefono')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
    
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
                                    <input id="direccion" type="direccion" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}" autocomplete="direccion" required>
                                    
                                    @error('direccion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            @if (count($planes))
                            <div class="form-group row">
                                <label for="planes" class="col-md-4 col-form-label text-md-right">Selecione un plan</label>
    
                                <div class="col-md-6">

                                    <select name="planes[]" id="" class="form-control">
                                        @foreach ($planes as $p)    
                                            <option value="{{ $p->id }}" {{ old('planes.'.$p->id)==$p->id ?'selected':'' }}>
                                                {{ $p->nombre }}
                                            </option>
                                        @endforeach

                                    </select>
                                    
                                </div>
                            </div>
                            @else
                            <div class="alert alert-warning" role="alert">
                                <strong>No existe planes registrados, para asignar al cliente</strong>
                            </div>
                            @endif

                            <hr>
                            <label for="">Selecione ubicación</label>
                            <div id="map"></div>
                            <input type="hidden" id="lat" name="lat" value="{{ old('lat') }}">
                            <input type="hidden" id="lng" name="lng" value="{{ old('lng') }}">
                    </div>
                    <div class="card-footer text-muted">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@push('linksCabeza')

@endpush
@prepend('linksPie')
    <script>
    $('#menuClientes').addClass('active');  
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
            draggable: true,
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
