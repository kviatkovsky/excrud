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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/addRecord', 'HomeController@create')->name('home');
Route::post('/store', 'HomeController@store');
Route::get('/home/{id}', 'HomeController@destroy');
Route::get('/addRecord/{id}', 'HomeController@update');

Route::get('importExport', 'ItemController@importExport');
Route::get('downloadExcel/{type}', 'ItemController@downloadExcel');
Route::post('/importExcel', 'ItemController@importExcel');