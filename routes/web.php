<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/bandejavisitas', 'VisitasController@index')->name('bandeja.visitas');

Route::get('/registrarvisitas', function () {
    return view('registrarvisitas');
});

Route::get('/reportevisitas', function () {
    return view('reportevisitas');
});
