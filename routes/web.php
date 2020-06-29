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
    return view('parkir');
});


Route::get('/konsumen','KonsumenController@index');
Route::post('/konsumen/add','KonsumenController@add');
Route::get('/konsumen/edit/{id}','KonsumenController@edit');
Route::post('/konsumen/update/{id}','KonsumenController@update');
Route::get('/konsumen/delete/{id}','KonsumenController@delete');

Route::get('/transaksi','TransaksiController@index');