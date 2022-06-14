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
    return view('index');
});

Route::get('/siswa','SiswaController@index')->name('siswa');
Route::get('/siswa/create','SiswaController@create')->name('/siswa/create');
Route::post('/siswa/store','SiswaController@store')->name('/siswa/store');
Route::get('/siswa/show/{id}','SiswaController@show')->name('/siswa/show');
Route::get('/siswa/edit/{id}','SiswaController@edit');
Route::post('/siswa/update/{id}','SiswaController@update');
Route::get('/siswa/destroy/{id}','SiswaController@destroy');