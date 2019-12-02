@extends('layouts.app')

@section('breadcrumbs', Breadcrumbs::render('clientes'))

@section('content')
<div class="container mt-2 mb-2">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Selecionar cliente
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
    $('#menuClientes').addClass('active');  
    </script>
    {!! $dataTable->scripts() !!}
@endprepend

@endsection
