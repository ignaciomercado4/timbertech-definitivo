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

Route::get('/', 'InitialController@mostrarHomepage')
->name('homepage');

Route::get('/completarRegistro', 'InitialController@mostrarCompletarRegistro')
->name('completarRegistro');

Route::post('/completarRegistro/success', 'InitialController@crearRegistro')
->name('crearRegistro');

Route::get('/registrosExistentes', 'InitialController@mostrarRegistrosExistentes')
->name('registrosExistentes');


