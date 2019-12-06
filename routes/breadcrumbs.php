<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Inicio', route('home'));
});

// Planes
Breadcrumbs::for('planes', function ($trail) {
    $trail->parent('home');
    $trail->push('Planes', route('planes'));
});
Breadcrumbs::for('nuevoPlan', function ($trail) {
    $trail->parent('planes');
    $trail->push('Nuevo plan', route('nuevoPlan'));
});
Breadcrumbs::for('editarPlan', function ($trail,$plan) {
    $trail->parent('planes');
    $trail->push('Editar plan', route('editarPlan',$plan->id));
});

// clientes

Breadcrumbs::for('clientes', function ($trail) {
    $trail->parent('home');
    $trail->push('Clientes', route('clientes'));
});
Breadcrumbs::for('nuevoCliente', function ($trail) {
    $trail->parent('clientes');
    $trail->push('Nuevo cliente', route('nuevoCliente'));
});
Breadcrumbs::for('editarCliente', function ($trail,$user) {
    $trail->parent('clientes');
    $trail->push('Editar cliente', route('editarCliente',$user->id));
});
Breadcrumbs::for('editarCalendarioPagos', function ($trail,$user) {
    $trail->parent('clientes');
    $trail->push('Calendario de planes', route('editarCalendarioPagos',$user->id));
});


// facturas
Breadcrumbs::for('facturas', function ($trail) {
    $trail->parent('home');
    $trail->push('Facturas', route('facturas'));
});
Breadcrumbs::for('facturaDetalle', function ($trail,$factura) {
    $trail->parent('facturas');
    $trail->push('Detalle de factura', route('facturaDetalle',$factura->id));
});
Breadcrumbs::for('reportes', function ($trail) {
    $trail->parent('facturas');
    $trail->push('Reportes', route('reportes'));
});



// soporte

Breadcrumbs::for('soporte', function ($trail) {
    $trail->parent('home');
    $trail->push('Soporte', route('soporte'));
});
Breadcrumbs::for('chatSolucion', function ($trail,$soporte) {
    $trail->parent('soporte');
    $trail->push('Chat de soporte', route('chatSolucion',$soporte->id));
});