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

Route::get('/Admin', 'AdminController@index');
Route::get('/Admin/Mahasiswa', 'AdminController@read_mahasiswa');
Route::get('/Admin/UpdateMahasiswa/{id_mhs}', 'AdminController@update_mahasiswa_v');
Route::post('/Admin/UpdateMahasiswa/Proses', 'AdminController@update_mahasiswa');