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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/print/{id}', 'PrintController@print')->name('print');


Route::prefix('/')->middleware(['auth'])->group(function () {

    Route::get('/create', 'DaftarController@create')->name('daftar.create');
    Route::get('/index', 'DaftarController@index')->name('daftar.index');
    Route::post('/store', 'DaftarController@store')->name('daftar.store');
    Route::get('/edit/{id}', 'DaftarController@edit')->name('daftar.edit');
    Route::patch('/update/{id}', 'DaftarController@update')->name('daftar.update');
    Route::get('/show/{nis}', 'DaftarController@show')->name('daftar.show');
    Route::delete('/delete/{id}', 'DaftarController@destroy')->name('daftar.delete');
});
