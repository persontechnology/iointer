<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
    // Artisan::call('cache:clear');
    // Artisan::call('config:clear');
    // Artisan::call('config:cache');
    // Artisan::call('storage:link');
    // Artisan::call('key:generate');
    // Artisan::call('migrate:fresh --seed');
});

// estaticas
Route::get('/nosotros', 'Estaticas@nosotros')->name('nosotros');
Route::get('/equipo', 'Estaticas@equipo')->name('equipo');
Route::get('/servicios', 'Estaticas@servicios')->name('servicios');
Route::get('/precios', 'Estaticas@precios')->name('precios');
Route::get('/preguntas', 'Estaticas@preguntas')->name('preguntas');
Route::get('/contacto', 'Estaticas@contacto')->name('contacto');
Route::post('/enviar-contacto', 'Estaticas@contactoEnviar')->name('contactoEnviar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// planes
Route::get('/planes', 'Planes@index')->name('planes');
Route::get('/planes-nuevo', 'Planes@nuevo')->name('nuevoPlan');
Route::post('/planes-guardar', 'Planes@guardar')->name('guardarPlan');
Route::get('/planes-eliminar/{plan}', 'Planes@eliminar')->name('eliminarPlan');
Route::get('/planes-editar/{plan}', 'Planes@editar')->name('editarPlan');
Route::post('/planes-actualizar', 'Planes@actualizar')->name('actualizarPlan');



// clientes
Route::get('/clientes', 'Clientes@index')->name('clientes');
Route::get('/clientes-nuevo', 'Clientes@nuevo')->name('nuevoCliente');
Route::post('/clientes-guardar', 'Clientes@guardar')->name('guardarCliente');
Route::get('/clientes-eliminar/{cliente}', 'Clientes@eliminar')->name('eliminarCliente');
Route::get('/clientes-editar/{cliente}', 'Clientes@editar')->name('editarCliente');
Route::post('/clientes-actualizar', 'Clientes@actualizar')->name('actualizarCliente');
Route::get('/clientes-editar-calendario-pagos/{cliente}', 'Clientes@editarCalendarioPagos')->name('editarCalendarioPagos');
Route::post('/clientes-actualizar-dias-pago', 'Clientes@actualizarDiasPago')->name('actualizarDiasPago');



// facturas
Route::get('/facturas', 'Facturas@index')->name('facturas');
Route::get('/facturas-detalle/{factura}', 'Facturas@detalle')->name('facturaDetalle');
Route::get('/facturas-realizar-factura/{user}', 'Facturas@realizarFactura')->name('realizarFactura');
Route::post('/facturas-generar', 'Facturas@generar')->name('generarFactura');
Route::get('/facturas-anular/{factura}', 'Facturas@anular')->name('anularFactura');

// soporte en linea
Route::get('/soporte-en-linea', 'Estaticas@soporteEnLinea')->name('soporteEnLinea');
Route::post('/soporte-en-linea-crear', 'Estaticas@crearSoporte')->name('crearSoporte');
Route::get('/soporte-en-linea-solucion/{soporte}', 'Estaticas@solucionSoporte')->name('solucionSoporte');
Route::get('/soporte-en-linea-cargar-chat/{soporte}', 'Estaticas@cargarChat')->name('cargarChat');
Route::post('/soporte-en-linea-guardar-char-cliente', 'Estaticas@guardaChatCliente')->name('guardaChatCliente');


// soporte
Route::get('/soporte', 'Soportes@index')->name('soporte');
Route::post('/soporte-cambiar-estado', 'Soportes@estado')->name('cambiarEstadoSoporte');
Route::get('/soporte-eliminar/{soporte}', 'Soportes@eliminar')->name('eliminarSoporte');
Route::get('/soporte-chat-solucion/{soporte}', 'Soportes@chat')->name('chatSolucion');
Route::post('/soporte-chat-guardar', 'Soportes@guardarChat')->name('guardaChatAdmin');


