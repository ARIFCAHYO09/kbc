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

Route::get('/api/{api_key}/{api_secret}/user', 'userapi@index');

Route::get('/api/{api_key}/{api_secret}/user/id/{id}', 'userapi@select_user_id');
Route::get('/api/{api_key}/{api_secret}/user/name/{name}', 'userapi@search_user_name');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
