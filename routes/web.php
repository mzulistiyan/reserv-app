<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.master');
});

Route::get('/ruangan/index', 'App\Http\Controllers\RuanganController@index')->name('ruangan.index');
Route::get('/ruangan/create', 'App\Http\Controllers\RuanganController@create')->name('ruangan.create');
Route::post('/ruangan/store', 'App\Http\Controllers\RuanganController@store')->name('ruangan.store');
Route::get('/ruangan/edit/{id}', 'App\Http\Controllers\RuanganController@edit')->name('ruangan.edit');
Route::post('/ruangan/update/{id}', 'App\Http\Controllers\RuanganController@update')->name('ruangan.update');
Route::delete('/ruangan/delete/{id}', 'App\Http\Controllers\RuanganController@destroy')->name('ruangan.delete');

Route::get('/reservasi/index', 'App\Http\Controllers\ReservasiController@index')->name('reservasi.index');
Route::put('/reservasi/update/{id}/', 'App\Http\Controllers\ReservasiController@updateStatus')->name('reservasi.update');
Route::delete('/reservasi/delete/{id}', 'App\Http\Controllers\ReservasiController@destroy')->name('reservasi.delete');

//Gedung
Route::get('/gedung/index', 'App\Http\Controllers\GedungController@index')->name('gedung.index');
Route::get('/gedung/create', 'App\Http\Controllers\GedungController@create')->name('gedung.create');
Route::post('/gedung/store', 'App\Http\Controllers\GedungController@store')->name('gedung.store');
Route::get('/gedung/edit/{id}', 'App\Http\Controllers\GedungController@edit')->name('gedung.edit');
Route::post('/gedung/update/{id}', 'App\Http\Controllers\GedungController@update')->name('gedung.update');
Route::delete('/gedung/delete/{id}', 'App\Http\Controllers\GedungController@destroy')->name('gedung.delete');
