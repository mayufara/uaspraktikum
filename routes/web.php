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
    return view('koneksi');
});

Route::get('/mahasiswa', 'MahasiswaController@mahasiswa');
Route::get('/mahasiswa/cari', 'MahasiswaController@pencarian');
Route::get('/mahasiswa/formulirMhs', 'MahasiswaController@formulirMhs');
Route::post('/mahasiswa/save', 'MahasiswaController@save');
Route::get('/mahasiswa/edit/{id}', 'MahasiswaController@edit');
Route::put('/mahasiswa/simpanmhs/{id}', 'MahasiswaController@simpanmhs');
Route::get('/mahasiswa/hapus/{id}', 'MahasiswaController@hapus');

Route::get('/dosen', 'DosenController@dosen');
Route::get('/dosen/cari', 'DosenController@pencarian');
Route::get('/dosen/formulirDosen', 'DosenController@formulirDosen');
Route::post('/dosen/save', 'DosenController@save');
Route::get('/dosen/edit/{id}', 'DosenController@edit');
Route::put('/dosen/simpandosen/{id}', 'DosenController@simpandosen');
Route::get('/dosen/hapus/{id}', 'DosenController@hapus');

Route::get('/user', 'AuthController@user');
Route::get('/user/formuser', 'AuthController@formuser');
Route::get('/user/cari', 'AuthController@cari');
Route::post('/user/saveuser', 'AuthController@saveuser');
Route::get('/user/deleteuser/{id}', 'AuthController@deleteuser');
Route::get('/login', 'AuthController@login');
Route::post('user/ceklogin', 'AuthController@ceklogin');
Route::get('/logout', 'AuthController@logout');