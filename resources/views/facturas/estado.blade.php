<span class="badge {{ $fa->estado=='Creado'?'badge-warning':''}} {{ $fa->estado=='Entregado'?'badge-success':''}} {{ $fa->estado=='Anulado'?'badge-danger':''}}">
    {{ $fa->estado }}
</span>