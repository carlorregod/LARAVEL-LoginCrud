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

Route::get('/', 'LoginController@index')->name('login');
Route::get('register', 'LoginController@register');
Route::get('login', 'LoginController@login');
//Registrar usuario nuevo
Route::POST('registro_nuevo', 'LoginController@registro_user');