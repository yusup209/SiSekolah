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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('sekolah')->group(function(){
	Route::get('/all', 'SekolahController@all')->name('semua_sekolah');
	Route::get('/add', 'SekolahController@add')->name('tambah_sekolah');
	Route::post('/save', 'SekolahController@save')->name('simpan_sekolah');
	Route::get('/edit/{id}', 'SekolahController@edit')->name('edit_sekolah');
	Route::post('/update', 'SekolahController@update')->name('update_sekolah');
	Route::get('/delete/{id}', 'SekolahController@delete')->name('hapus_sekolah');
});


Route::prefix('kelas')->group(function(){
	Route::get('/all', 'KelasController@all')->name('semua_kelas');
	Route::get('/add', 'KelasController@add')->name('tambah_kelas');
	Route::post('/save', 'KelasController@save')->name('simpan_kelas');
	Route::get('/edit/{id}', 'KelasController@edit')->name('edit_kelas');
	Route::post('/update', 'KelasController@update')->name('update_kelas');
	Route::get('/delete/{id}', 'KelasController@delete')->name('hapus_kelas');
});


Route::prefix('siswa')->group(function(){
	Route::get('/all', 'SiswaController@all')->name('semua_siswa');
	Route::get('/add', 'SiswaController@add')->name('tambah_siswa');
	Route::post('/save', 'SiswaController@save')->name('simpan_siswa');
	Route::get('/edit/{id}', 'SiswaController@edit')->name('edit_siswa');
	Route::post('/update', 'SiswaController@update')->name('update_siswa');
	Route::get('/delete/{id}', 'SiswaController@delete')->name('hapus_siswa');
});