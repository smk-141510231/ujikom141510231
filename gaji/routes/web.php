<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('golongan','golonganController');
Route::resource('jabatan','jabatanController');
Route::resource('pegawai','pegawaiController');
Route::resource('kategori','KategoriLemburController');
Route::resource('tunjangan','tunjanganController');
Route::resource('lembur','lembur_pegawai_Controller');
Route::resource('tunpeg','tunjangan_pegawai_Controller');
Route::resource('penggajian','penggajianController');
