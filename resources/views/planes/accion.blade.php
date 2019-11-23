<div class="btn-group btn-group-sm" role="group" aria-label="...">
    <button type="button" class="btn btn-danger" onclick="eliminar(this);" data-url="{{ route('eliminarPlan',$p->id) }}" data-toggle="tooltip" data-placement="top" data-title="Eliminar {{ $p->nombre }}">
        <i class="fas fa-trash"></i>
    </button>
    <a href="{{ route('editarPlan',$p->id) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" data-title="Editar">
        <i class="fas fa-edit"></i>
    </a>
</div>
