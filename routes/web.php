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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/venta', 'HomeController@feria');
//------------------------------------ferias----------------------------------------
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('feria', 'HomeController@feria');
Route::post('/home', 'FeriaController@store')->name('ferias.store');


//------------------------------------Stand-----------------------------------------
Route::get('/stand', 'StandController@inicio');
Route::post('stand','StandController@crear')->name('stand.crear');
//Stand editar
Route::get('/editar/{id}', 'StandController@editar')->name('stand.editar');
Route::put('/editar/{id}','StandController@update')->name('stand.update');
//Stand eliminar
Route::delete('eliminar/{id}','StandController@eliminar')->name('stand.eliminar');