@extends('layouts.app')

@section('breadcrumbs', Breadcrumbs::render('soporte'))

@section('content')
<div class="container mt-2 mb-2">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   Soporet en línea
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
    
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script src="{{ asset('assets/js/blockui.min.js') }}"></script>
@endpush
@prepend('linksPie')
    <script>
    $('#menuSoporte').addClass('active');  


    function cambiarEstado(arg){
        var soporte=$(arg).data('id');
        var estado=$(arg).val();
        $.blockUI({message:'<h1>Espere por favor.!</h1>'});
        $.post("{{ route('cambiarEstadoSoporte') }}", {soporte:soporte,estado:estado} )
        .done(function(data){
             if(data.success){
                $.notify(data.success,'success' );
             }
         })
        .fail(function() {
            $.notify("Ocurrio un error, vuelva intentar", 'info');
        })
        .always(function() {
            $.unblockUI();
        });
    }


    </script>
    {!! $dataTable->scripts() !!}
@endprepend

@endsection
