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



Route::get ('/index', 'PagesController@home');

Route::get ('/fasilitas', 'PagesController@fasilitas');

Route::get ('/gallery', 'PagesController@gallery');

Route::get ('/informasi', 'PagesController@informasi');

Route::get ('/mahasiswa', 'MahasiswaController@index');

Route::get('/jurusan','JurusanController@index');