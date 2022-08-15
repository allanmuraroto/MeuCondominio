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
Route::get('/','PrincipalController@index')->name("site.index");
Route::get('/sobrenos','PrincipalController@sobre')->name("site.quemsomos");
Route::get('/contato', 'ContatoController@contato')->name("site.contato");

