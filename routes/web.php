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






Route::resource('login', 'loginController');
Route::resource('register', 'registerController');


Route::middleware(['admin'])->group(function () {
    Route::resource('obat', 'ObatController');
    Route::resource('wilayah', 'WilayahController');
    Route::resource('pegawai', 'PegawaiController');
    Route::resource('datapasien', 'datapasien');
    Route::resource('datatindakan', 'datatindakan');
    Route::resource('datatransaksi', 'datatransaksi');
});
Route::middleware(['user'])->group(function () {
    Route::view('user', 'layout/boostrap');
    Route::resource('pasien', 'PasienController');
    Route::resource('tindakan', 'TindakanController');
    Route::resource('transaksi', 'transaksicontroller');
});

Route::get('logout', 'logincontroller@logout');
Route::get('/home', 'homecontroller@index');


Route::get('/tampilan', function () {
});
return view('tampilan.index');



// Route::get('/login', function () {
//     return view('Login.login');
// });