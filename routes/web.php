<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    // return view('dashboard');
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';

Route::resource('user','App\Http\Controllers\UserController');
Route::resource('pelanggan','App\Http\Controllers\PelangganController');
Route::resource('barang','App\Http\Controllers\BarangController');
Route::resource('penjualan','App\Http\Controllers\PenjualanController');
Route::resource('reportuser','App\Http\Controllers\ReportUserController');
Route::resource('reportbarang','App\Http\Controllers\ReportBarangController');
// cetak pdf
Route::get('cetak_user','App\Http\Controllers\ReportUserController@cetak_user')->name('cetak_user');
Route::get('cetak_brg','App\Http\Controllers\ReportBarangController@cetak_brg')->name('cetak_brg');


// Route::get('user', 'App\Http\Controllers\Api\RegisterController@register');