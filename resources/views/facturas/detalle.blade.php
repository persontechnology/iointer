@extends('layouts.app')

@section('breadcrumbs', Breadcrumbs::render('facturaDetalle',$factura))

@section('content')
<div class="container mt-2 mb-2">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="{{ route('generarFactura') }}" method="POST">
                @csrf
                <input type="hidden" name="factura" value="{{ $factura->id }}">
                <div class="card">
                    <div class="card-header">
                        Detalle de la factura
                    </div>

                    <div class="card-body">
                        <hr>
                        <div class="form-group float-right mb-2">
                            <label for="" class="mb-2 text-danger"><strong>Ingrese número de factura</strong></label><br>
                            <input class="border border-danger" name="numero" type="text" class="form-control" value="{{ $factura->numero }}" placeholder="" required>
                        </div>
                            <h1 class="text-center">Factura N: {{ $factura->numero }}</h1>
                        
                        <hr>
                        <p class="text-right">
                                THE SPARTANS GYM <br>
                                José Mejía y 11 de Noviembre Cuarto piso del edificio María José <br>
                                MACHACHI <br>
                                Tel: 0991143427 <br>
                                gymspartamachachi@gmail.com
                        </p>
                        <p>
                                <strong>RUC:</strong> 0503652349 <br>
                                <strong>CLIENTE:</strong> vilmer criollo <br>
                                <strong>DIRECCIÓN:</strong> salcedo <br>
                                <strong>TELÉFONO:</strong> 032730015 <br>
                                <strong>FECHA:</strong> 2019-12-03 08:48:58 <br>
                        </p>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">DESCRIPCIÓN</th>
                                    <th scope="col">CANTIDAD</th>
                                    <th scope="col">PRECIO ÚNITARIO</th>
                                    <th scope="col">TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>{{ $factura->plan->nombre }}</td>
                                        <td>1</td>
                                        <td>{{ $factura->valor }}</td>
                                        <td>{{ $factura->valor }}</td>
                                    </tr>
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>Nota: <br> Factura: {{ $factura->estado }}</td>
                                        <td colspan="3" class="text-right">TOTAL:</td>
                                        <td >
                                            {{ $factura->valor }}
                                        </td>
                                    </tr>
                                </tfoot>
                                </table>
                                
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        
                            <button type="submit" class="btn btn-primary">Generar factura</button>
                        
                        
                            <a href="{{ route('realizarFactura',$factura->id) }}" target="_blanck" class="btn btn-success">Imprimir factura</a>
                            <a href="{{ route('anularFactura',$factura->id) }}" class="btn btn-danger">Anular factura</a>
                        
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
        $('#menuFactura').addClass('active'); 
    </script>
@endprepend

@endsection
