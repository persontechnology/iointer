<select class="form-control" id="exampleFormControlSelect1" onchange="cambiarEstado(this);" data-id="{{ $s->id }}">
    <option value="Ingresado" {{ $s->estado=='Ingresado'?'selected':'' }}>Ingresado</option>
    <option value="Atendido" {{ $s->estado=='Atendido'?'selected':'' }}>Atendido</option>
    <option value="Anulado" {{ $s->estado=='Anulado'?'selected':'' }}>Anulado</option>
</select>