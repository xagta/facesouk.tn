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

Route::get('/', 'HomeController@index')->name('home');
Route::resource('opportunities', 'OpportunitiesController')->middleware('auth');

Route::get('entreprises/', 'EntreprisesController@index') ;

Route::get('entreprises/{id}', 'EntreprisesController@show')->name('show_entreprise') ;


