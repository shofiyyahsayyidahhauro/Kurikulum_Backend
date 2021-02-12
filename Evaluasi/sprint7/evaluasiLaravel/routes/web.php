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

Route::get('/', 'PendaftaranController@index');
Route::get('/pendaftaran/create', 'PendaftaranController@create');
Route::post('/pendaftaran', 'PendaftaranController@store');
Route::get('/pendaftaran/{id}/edit', 'PendaftaranController@edit');
Route::patch('/pendaftaran/{id}', 'PendaftaranController@update');
Route::delete('/pendaftaran/{id}', 'PendaftaranController@destroy');


