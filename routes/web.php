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
Route::view('customers', 'customers');

Route::get('/edit', 'SampahController@edit');

Route::get('/editprofil', 'SampahController@editprofil');

Route::get('/editpassword', 'SampahController@editpassword');

Route::get('/tukarpoin', 'SampahController@tukarpoin');

Route::get('/dashboard', 'SampahController@dashboard');

Route::get('/antar', 'SampahController@antar');

Route::get('/jemput', 'SampahController@jemput');

Route::get('/jemput2', 'SampahController@jemput2');

Route::get('/your', 'SampahController@your');

Route::get('/home', 'HomeController@index')->name('home');
