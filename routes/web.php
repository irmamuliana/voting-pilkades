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

Route::get('/qrcode', function () {
    return view('qrcode_login');
});

// Handler Login Request With Ajax And QrCode
Route::get('qrcode/login','Qrcode\AuthController@login');

Route::get('/','HomeController@index');

Route::post('voting_save','HomeController@voting_save');

Route::get('voting','HomeController@voting');

Route::prefix('adminzone')->name('adminzone.')->group(function () {
    Route::resource('tps','Admin\TpsController');
    Route::resource('pemilih','Admin\PemilihController');
    Route::resource('pemilihte','Admin\PemilihController');
    Route::get('pemilih/cetak','Admin\PemilihController@Cetak');
    Route::get('laporan-pdf','Admin\PemilihController@generatePDF');
    Route::get('cetak/{id}','Admin\PemilihController@cetakPemilih');
    Route::resource('petugas','Admin\PetugasController');
    Route::resource('paslon','Admin\PaslonController');
    Route::resource('hasil','Admin\HasilController');
    Route::get('laporan-hasil','Admin\HasilController@generatePDF');
    Route::resource('pemilu','Admin\PemiluController');
    Route::resource('jadwal_pemilihan','Admin\JadwalPemilihanController');
    Route::resource('user','Admin\UserController');
    Route::get('login','Auth\LoginController@showLoginForm');
    Route::get('logout','Auth\LoginController@logout')->name('logout');
    Route::get('dashboard','Admin\PageController@dashboard');
});

Auth::routes();
