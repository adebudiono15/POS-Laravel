<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

// customer
Route::get('/master-customer', 'CustomerController@index')->name('customer');
Route::post('simpan-customer', 'CustomerController@save')->name('save-customer');
Route::get('{id}/edit-customer', 'CustomerController@edit')->name('edit-customer');
Route::patch('customer/update/{id}', 'CustomerController@update')->name('update-customer');
Route::delete('customer/{id}', 'CustomerController@delete')->name('delete-customer');

// barang
Route::get('/master-barang', 'BarangController@index')->name('barang');
Route::post('simpan-barang', 'BarangController@save')->name('save-barang');
Route::get('{id}/edit-barang', 'BarangController@edit')->name('edit-barang');
Route::patch('barang/update/{id}', 'BarangController@update')->name('update-barang');
Route::delete('barang/{id}', 'BarangController@delete')->name('delete-barang');

// penjualan
Route::get('/master-penjualan', 'PenjualanController@index')->name('penjualan');
Route::get('customer/ajax/{kode_customer}', 'PenjualanController@get_customer');
Route::get('barang/ajax/{kode_barang}', 'PenjualanController@get_barang');
Route::post('simpan-penjualan', 'PenjualanController@save')->name('save-penjualan');
Route::get('transaksi-penjualan/{id}', 'PenjualanController@detail');
Route::delete('penjualan/{id}', 'PenjualanController@delete')->name('delete-penjualan');