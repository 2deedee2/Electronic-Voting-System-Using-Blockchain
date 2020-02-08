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


Route::get('/login','UsersController@login')->name('login');
Route::get('/register','UsersController@register')->name('register');
