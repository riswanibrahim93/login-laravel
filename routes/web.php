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

Route::get('/menu', function () {
    return view('antrian/menu');
});
Route::get('/nomorAntri', function () {
    return view('antrian/nomorAntri');
});
Route::get('/panggilPetugas', function () {
    return view('antrian/panggilPetugas');
});
Route::get('/pengunjung', function () {
    return view('antrian/pengunjung');
});
Route::get('/pilihPetugas', function () {
    return view('antrian/pilihPetugas');
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
