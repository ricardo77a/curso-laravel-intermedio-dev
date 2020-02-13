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
});

Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/enviar-correo', 'EnviarCorreoController')->name('enviar.correo');

Route::post('/importar-excel', 'BecariosController@importar')->name('importar.excel');
Route::get('/exportar-excel', 'BecariosController@exportar')->name('exportar.excel');
Route::get('/exportar-pdf', 'BecariosController@pdf')->name('exportar.pdf');
Route::get('/grafica', 'BecariosController@grafica')->name('grafica');
