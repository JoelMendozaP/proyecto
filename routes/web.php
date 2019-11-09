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

Route::get('/', 'WellcomeComtroller@inicio');


Auth::routes();
Route::get('/venta', 'HomeController@feria');

//------------------------------------ferias----------------------------------------
Route::get('/home', 'HomeController@index')->name('home');
Route::get('feria', 'HomeController@feria')->name('feria');
Route::post('/home', 'FeriaController@store')->name('ferias.store');
//Stand editar
Route::get('/feria/editar/{id}', 'HomeController@editar')->name('feria.editar');
Route::put('/feria/editar/{id}','HomeController@update')->name('ferias.update');
//Stand eliminar
Route::delete('/feria/eliminar/{id}','HomeController@eliminar')->name('feria.eliminar');

//------------------------------------Stand-----------------------------------------
Route::get('/stand', 'StandController@inicio');
Route::post('stand','StandController@crear')->name('stand.crear');
//Stand editar
Route::get('/editar/{id}', 'StandController@editar')->name('stand.editar');
Route::put('/editar/{id}','StandController@update')->name('stand.update');
//Stand eliminar
Route::delete('eliminar/{id}','StandController@eliminar')->name('stand.eliminar');