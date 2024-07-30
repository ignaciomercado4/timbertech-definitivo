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

use App\Http\Controllers\LoginUsuarioController;

Route::get('/', 'InitialController@mostrarHomepage')->middleware('auth')->name('homepage');

Route::get('/formRegistro', 'InitialController@mostrarFormRegistro')->name('formRegistro');

Route::post('/validar-registro', [LoginUsuarioController::class, 'register'])->name('validar-registro');

Route::get('/formLogin', 'InitialController@mostrarLogin')->name('login');

Route::post('/inicia-sesion', [LoginUsuarioController::class, 'login'])->name('inicia-sesion');

Route::get('/logout', [LoginUsuarioController::class, 'logout'])->name('logout');

Route::get('/completarRegistro', 'InitialController@mostrarCompletarRegistro')->middleware('auth')->name('completarRegistro');

Route::post('/completarRegistro/success', 'InitialController@crearRegistro')->middleware('auth')->name('crearRegistro');

Route::get('/registrosExistentes', 'InitialController@mostrarRegistrosExistentes')->middleware('auth')->name('registrosExistentes');

Route::delete('/registroEliminado/{id}', 'InitialController@eliminarRegistro')->middleware('auth')->name('registrosExistentes.delete');

Route::match(['patch', 'put'], '/registroModificado/{id}', 'InitialController@modificarRegistro')->middleware('auth')->name('registrosExistentes.modify');



