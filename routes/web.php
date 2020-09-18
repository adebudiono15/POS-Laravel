<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

// barang
Route::get('/master-barang', 'BarangController@index')->name('barang');
Route::post('simpan-barang', 'BarangController@save')->name('save-barang');
Route::get('{id}/edit-barang', 'BarangController@edit')->name('edit-barang');
Route::patch('barang/update/{id}', 'BarangController@update')->name('update-barang');
Route::delete('barang/{id}', 'BarangController@delete')->name('delete-barang');

// customer
Route::get('/master-customer', 'CustomerController@index')->name('customer');
Route::post('simpan-customer', 'CustomerController@save')->name('save-customer');
Route::get('{id}/edit-customer', 'CustomerController@edit')->name('edit-customer');
Route::patch('customer/update/{id}', 'CustomerController@update')->name('update-customer');
Route::delete('customer/{id}', 'CustomerController@delete')->name('delete-customer');

// Kategori
Route::get('/master-kategori', 'KategoriController@index')->name('kategori');
Route::post('simpan-kategori', 'KategoriController@save')->name('save-kategori');
Route::delete('kategori/{id}', 'KategoriController@delete')->name('delete-kategori');
Route::get('{id}/edit-kategori', 'KategoriController@edit')->name('edit-kategori');
Route::patch('kategori/update/{id}', 'KategoriController@update')->name('update-kategori');

// Supplier
Route::get('/master-supplier', 'SupplierController@index')->name('supplier');
Route::post('simpan-supplier', 'SupplierController@save')->name('save-supplier');
Route::delete('supplier/{id}', 'SupplierController@delete')->name('delete-supplier');
Route::get('{id}/edit-supplier', 'SupplierController@edit')->name('edit-supplier');
Route::patch('supplier/update/{id}', 'SupplierController@update')->name('update-supplier');

// satuan
Route::get('/master-satuan', 'SatuanController@index')->name('satuan');
Route::post('simpan-satuan', 'SatuanController@save')->name('save-satuan');
Route::delete('satuan/{id}', 'SatuanController@delete')->name('delete-satuan');
Route::get('{id}/edit-satuan', 'SatuanController@edit')->name('edit-satuan');
Route::patch('satuan/update/{id}', 'SatuanController@update')->name('update-satuan');


// penjualan
Route::get('/master-penjualan', 'PenjualanController@index')->name('penjualan');
Route::get('customer/ajax/{kode_customer}', 'PenjualanController@get_customer');
Route::get('barang/ajax/{kode_barang}', 'PenjualanController@get_barang');
Route::post('simpan-penjualan', 'PenjualanController@save')->name('save-penjualan');
Route::get('transaksi-penjualan/{id}', 'PenjualanController@detail');
Route::delete('penjualan/{id}', 'PenjualanController@delete')->name('delete-penjualan');

// pembelian
Route::get('/master-pembelian', 'PembelianController@index')->name('pembelian');
Route::get('/master-pembelian-barang', 'PembelianController@pembelian')->name('pembelian-barang');
Route::get('master-pembelian-barang/{kode_Supplier}', 'PembelianController@get_barang');
Route::post('simpan-pembelian', 'PembelianController@save')->name('save-pembelian');
Route::delete('pembelian/{id}', 'PembelianController@delete')->name('delete-pembelian');
Route::get('transaksi-pembelian/{id}', 'PembelianController@detail');

// pernjualan kredit
Route::get('/master-penjualan-kredit', 'PenjualanKreditController@index')->name('penjualan-kredit');
Route::post('simpan-penjualan-kredit', 'PenjualanKreditController@save')->name('save-penjualan-kredit');
Route::delete('penjualan-kredit/{id}', 'PenjualanKreditController@delete')->name('delete-penjualan-kredit');
Route::get('transaksi-penjualan-kredit/{id}', 'PenjualanKreditController@detail');
Route::put('transaksi-penjualan-kredit/{id}', 'PenjualanKreditController@update');

// pembelian kredit
Route::get('/master-pembelian-kredit', 'PembelianKreditController@index')->name('pembelian-kredit');
Route::get('/master-pembelian-barang-kredit', 'PembelianKreditController@pembelian')->name('pembelian-barang-kredit');
Route::get('master-pembelian-barang-kredit/{kode_Supplier}', 'PembelianKreditController@get_barang');
Route::post('simpan-pembelian-kredit', 'PembelianKreditController@save')->name('save-pembelian-kredit');
Route::get('transaksi-pembelian-kredit/{id}', 'PembelianKreditController@detail');
Route::put('transaksi-pembelian-kredit/{id}', 'PembelianKreditController@update');
Route::delete('pembelian-kredit/{id}', 'PembelianKreditController@delete')->name('delete-pembelian-kredit');

