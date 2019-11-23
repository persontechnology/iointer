@extends('layouts.app')

@section('content')
<div class="container mt-2 mb-2">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    BIENVENIDO: {{ Auth::user()->email }}
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                        <h1 class="text-center"><span class="badge badge-warning">SISTEMA DE PLANES DE INTERNET</span></h1>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@push('linksCabeza')
    <script>

    </script>
@endpush
@prepend('linksPie')
    <script>
    $('#menuHome').addClass('active');  
    </script>
@endprepend

@endsection
