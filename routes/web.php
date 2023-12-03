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

Route::get('linktree', function () {
    return view('linktree');
});

Route::get('profileETS', function () {
    return view('profileETS');
});

Route::get('berita', function () {
    return view('berita');
});

Route::get('introHTML', function () {
    return view('introHTML');
});

Route::get('news', function () {
    return view('news');
});

Route::get('style', function () {
    return view('style');
});

Route::get('validasi1', function () {
    return view('validasi1');
});

Route::get('cobaJS', function () {
    return view('cobaJS');
});

Route::get('cobaJS2', function () {
    return view('cobaJS2');
});

Route::get('latihan1', function () {
    return view('latihan1');
});

Route::get('/', function () {
    return view('welcome');
});


Route::get('perkalian', 'App\Http\Controllers\DosenController@index') ;
Route::get('blog2', 'App\Http\Controllers\DosenController@showBlog') ;


Route::get('/pegawai/{nama}', 'App\Http\Controllers\DosenController@shownama');


Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');


Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

Route::get('/dbpegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/dbpegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/dbpegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/dbpegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/dbpegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/dbpegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/dbpegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/dbpegawai/view','App\Http\Controllers\PegawaiController@cari');

Route::get('/dbpegawai/view/{id}','App\Http\Controllers\PegawaiController@view');
