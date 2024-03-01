<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\reviewerController;
use App\Http\Controllers\penelitiController;
use App\Http\Controllers\formController;

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

//DI SINI RUTE MENU NAVIGASI
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//DI SINI RUTE PENELITI
Route::get('/peneliti', 'App\Http\Controllers\penelitiController@index')->name('peneliti.index');
Route::get('/peneliti/tambah', 'App\Http\Controllers\penelitiController@create')->name('peneliti-tambah');
Route::post('/peneliti', 'App\Http\Controllers\penelitiController@store')->name('peneliti-simpan');
Route::get('/peneliti/{id}/edit', 'App\Http\Controllers\penelitiController@edit')->name('peneliti-perbarui');
Route::put('/peneliti/{id}', 'App\Http\Controllers\penelitiController@update')->name('peneliti-simpan-perbaruan');
Route::delete('/peneliti/{id}', 'App\Http\Controllers\penelitiController@destroy')->name('peneliti-hapus');

//DI SINI RUTE REVIEWER
Route::get('/reviewer', 'App\Http\Controllers\reviewerController@index')->name('reviewer.index');
Route::get('/reviewer/tambah', 'App\Http\Controllers\reviewerController@create')->name('reviewer-tambah');
Route::post('/reviewer', 'App\Http\Controllers\reviewerController@store')->name('reviewer-simpan');
Route::get('/reviewer/{id}/edit', 'App\Http\Controllers\reviewerController@edit')->name('reviewer-perbarui');
Route::put('/reviewer/{id}', 'App\Http\Controllers\reviewerController@update')->name('reviewer-simpan-perbaruan');
Route::delete('/reviewer/{id}', 'App\Http\Controllers\reviewerController@destroy')->name('reviewer-hapus');

//DI SINI RUTE PENGATURAN FORM
Route::get('/pengaturanForm', 'App\Http\Controllers\formController@index')->name('form.index');
Route::get('/pengaturanForm/tambah', 'App\Http\Controllers\formController@create')->name('form-tambah');
Route::post('/pengaturanForm', 'App\Http\Controllers\formController@store')->name('form-simpan');
Route::get('/pengaturanForm/{id}/edit', 'App\Http\Controllers\formController@edit')->name('form-perbarui');
Route::put('/pengaturanForm/{id}', 'App\Http\Controllers\formController@update')->name('form-simpan-perbaruan');
Route::put('/pengaturanForm/aktifkan/{id}', 'App\Http\Controllers\formController@activate')->name('form-aktifkan');
Route::put('/pengaturanForm/nonaktifkan/{id}', 'App\Http\Controllers\formController@deactivate')->name('form-nonaktifkan');
Route::delete('/pengaturanForm/{id}', 'App\Http\Controllers\formController@destroy')->name('form-hapus');

//DI SINI RUTE RIWAYAT HASIL (RIWAYAT HASIL PENGISIAN FORM)
Route::get('/riwayat-hasil', 'App\Http\Controllers\formController@index')->name('riwayat.index');
Route::delete('/riwayat-hapus/{id}', 'App\Http\Controllers\formController@destroy')->name('riwayat-hapus');

//DI SINI RUTE PENGISIAN FORM DARI SISI PENELITI
Route::get('/form-monev', 'App\Http\Controllers\formController@search_active')->name('monev.index');


