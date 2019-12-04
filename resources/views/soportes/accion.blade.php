<div class="btn-group btn-group-sm" role="group" aria-label="...">
    <button type="button" class="btn btn-danger" onclick="eliminar(this);" data-url="{{ route('eliminarSoporte',$s->id) }}" data-toggle="tooltip" data-placement="top" data-title="Eliminar soporte">
        <i class="fas fa-trash"></i>
    </button>
    <a href="{{ route('chatSolucion',$s->id) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" data-title="Soporte">
        <i class="fas fa-headset"></i>
    </a>
</div>
    