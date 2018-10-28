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


Route::get ('/', 			'AdController@getAds');
Route::get ('/edit', 		'AdController@createAd');
Route::post('/edit/submit', 'AdController@submit');
Route::get('/edit/{id}', 	'AdController@editAd');
Route::get('/delete/{id}', 'AdController@delete');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/{id}', 'AdController@getAd');

/*
Route::get('/', 'PagesController@getHome');
Route::get('/createad', 'PagesController@getCreateAd');
*/

