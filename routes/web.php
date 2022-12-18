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
    return view('inicio');
});

Route::get('/contactame', function () {
    return view('contactame');
});

Route::get('/mapas', function () {
    return view('mapas');
});

Route::get('/productos', function () {
    return view('productos');
})->name('productos');

Route::get('/servicios', function () {
    return view('servicios');
});