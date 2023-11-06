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
