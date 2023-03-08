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
    return view('home');
});

Route::get('/zucchero', function () {
    return view('zucchero');
});

Route::get('/cannella', function () {
    return view('cannella');
});

Route::get('/ogni', function () {
    return view('ogni');
});

Route::get('/cosa', function () {
    return view('cosa');
});

Route::get('/bella', function () {
    return view('bella');
});
