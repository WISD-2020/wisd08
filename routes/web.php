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
    return view('welcome');
});

Route::get('/a1', function () {
    return view('aa.a1');
});

Route::get('/a2', function () {
    return view('aa.a2');
});

Route::get('/a3', function () {
    return view('aa.a3');
});

Route::get('/a4', function () {
    return view('aa.a4');
});

Route::get('/b1', function () {
    return view('bb.b1');
});

Route::get('/b2', function () {
    return view('bb.b2');
});

Route::get('/b3', function () {
    return view('bb.b3');
});

Route::get('/b4', function () {
    return view('bb.b4');
});
