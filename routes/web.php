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


Route::get('/', 'AdController@getAdds');

Route::get('/createad', function () {
    return view('createad');
});



/*
Route::get('/', 'PagesController@getHome');
Route::get('/createad', 'PagesController@getCreateAd');
*/
Route::post('/createad/submit', 'AdController@submit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
