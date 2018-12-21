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

Auth::routes();

Route::get('/', 'PersonController@index')->name('people_list');
Route::get('/home', 'PersonController@index')->name('people_list');
Route::resource('persons', 'PersonController');
Route::post('person/create', 'PersonController@new');
