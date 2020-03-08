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

Route::resource('phones', 'PhoneController');

Route::get('/phones/new', 'PhoneController@create')->name('phones.create');

Route::post('/phones/create', 'PhoneController@store');

Route::get('/phones/{phone}', 'PhoneController@show')
    ->name('phones.show');

Route::get('/phones', 'PhoneController@index')
    ->name('phones.index');    


Route::get('/phones/{phone}/edit', 'PhoneController@edit')->name('phones.edit');

Route::delete('/phones/{phone}', 'PhoneController@destroy')->name('phones.destroy');

Route::put('/phones/{phone}', 'PhoneController@update')->name('phones.update');
