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

Auth::routes(['register' => false]);

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




