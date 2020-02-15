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


Route::get('/','StaticPagesController@home')->name('home');


Route::get('register','UsersController@register')->name('register');
Route::resource('users','UsersController');

Route::get('login','SessionsController@create')->name('login');
Route::post('login','SessionsController@store')->name('login');
Route::delete('logout','SessionsController@destory')->name('logout');


Route::get('election','ElectionController@create')->name('election');
Route::post('election','ElectionController@store')->name('election');

Route::get('gen_result','ResultController@gen_result')->name('gen_result');
Route::get('result','ResultController@show_result')->name('show_result');


//get Voting table
Route::prefix('database')->group(function() {
    Route::get('insert','BallotCreateController@insert');
    Route::get('get','BallotCreateController@get');
});

Route::prefix('model')->group(function() {
    Route::get('index','ModelController@index');
    Route::get('getStatus','ModelController@getStatus');
});

