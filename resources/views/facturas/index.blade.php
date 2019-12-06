@extends('layouts.app')

@section('breadcrumbs', Breadcrumbs::render('facturas'))

@section('content')
<div class="container mt-2 mb-2">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Facturas
                    <a href="{{ route('reportes',['fi'=>\Carbon\Carbon::now()->toDateString(),'ff'=>\Carbon\Carbon::now()->toDateString()]) }}" class="btn btn-info float-right" data-toggle="tooltip" data-placement="top" title="Reportes estadísticos">
                        <i class="fas fa-chart-pie"></i>
                    </a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        {!! $dataTable->table()  !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('linksCabeza')
    
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/DataTables/datatables.min.css') }}"/>
    <script type="text/javascript" src="{{ asset('vendor/DataTables/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
    
@endpush
@prepend('linksPie')
    <script>
    $('#menuFactura').addClass('active');  
    </script>
    {!! $dataTable->scripts() !!}
@endprepend

@endsection
