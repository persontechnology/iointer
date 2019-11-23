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
