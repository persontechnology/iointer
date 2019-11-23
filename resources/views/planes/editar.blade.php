@extends('layouts.app')

@section('breadcrumbs', Breadcrumbs::render('editarPlan',$p))

@section('content')
<div class="container mt-2 mb-2">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="{{ route('actualizarPlan') }}" method="POST">
                @csrf
                <input type="hidden" name="plan" required value="{{ $p->id }}">
                <div class="card">
                    <div class="card-header">
                        Nuevo Plan
                    </div>
                    <div class="card-body">
                            
                            <div class="form-group row">
                                <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}<i class="text-danger">*</i></label>
    
                                <div class="col-md-6">
                                    <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre',$p->nombre) }}" required autocomplete="nombre" autofocus>
    
                                    @error('nombre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="valor" class="col-md-4 col-form-label text-md-right">Valor <i class="text-danger">*</i></label>
    
                                <div class="col-md-6">
                                    <input id="valor" type="text" class="form-control @error('valor') is-invalid @enderror" name="valor" value="{{ old('valor',$p->valor) }}" required autocomplete="valor">
    
                                    @error('valor')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="descripcion" class="col-md-4 col-form-label text-md-right">Descripción</label>
    
                                <div class="col-md-6">
                                    <input id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ old('descripcion',$p->descripcion) }}" autocomplete="descripcion">
    
                                    @error('descripcion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                                  
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
    $('#menuPlanes').addClass('active');  
    </script>
    
@endprepend

@endsection
