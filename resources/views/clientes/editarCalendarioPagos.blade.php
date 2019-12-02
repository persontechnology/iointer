@extends('layouts.app')

@section('breadcrumbs', Breadcrumbs::render('editarCalendarioPagos',$user))

@section('content')
<div class="container mt-2 mb-2">
    <div class="row justify-content-center">
        <div class="col-md-12">

        @if (count($user->planes))
        <form action="{{ route('actualizarDiasPago') }}" method="POST">
            @csrf
            <input type="hidden" name="cliente" value="{{ $user->id }}" required>
            <div class="card">
                <div class="card-header">
                    Días de pago del cliente: {{ $user->nombres }} {{ $user->apellidos }}
                </div>

                <div class="card-body">
                    
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                  <tr>
                                        <th scope="col">Plan</th>
                                        <th scope="col">Valor</th>
                                        <th scope="col">Día de pago</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  
                                    @foreach ($user->planes as $p)
                                        <tr>
                                          
                                            <th>
                                                {{ $p->nombre }}
                                            </th>
                                            <td>
                                                {{ $p->valor }}
                                            </td>
                                            <td>
                                                <input type="hidden" name="user_plans[{{ $p->user_plans->id }}]" value="{{ $p->user_plans->id }}">
                                                <input type="text" name="dias[{{ $p->user_plans->id }}]" class="form-control" value="{{ old('dias.'.$p->user_plans->id) ?? $p->user_plans->dia  }}" placeholder="Ingrese día de pago">
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                              </table>
                        </div>
                    
                    </div>
                    <div class="card-footer text-muted">
                        <button type="submit" class="btn btn-primary">Actualizar días de pago</button>
                    </div>
                </div>
            </form>

            @else

                <div class="alert alert-warning" role="alert">
                    <strong>Cliente no tiene planes</strong>
                </div>
                
            @endif
        </div>
    </div>
</div>

@push('linksCabeza')
    
@endpush
@prepend('linksPie')
    <script>
    $('#menuClientes').addClass('active');  
    </script>
@endprepend

@endsection
