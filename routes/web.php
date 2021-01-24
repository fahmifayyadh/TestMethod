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

Route::group(['prefix' => 'list'], function (){
    Route::get('/', 'page\HomeController@list')->name('list');
    Route::get('/get', 'page\HomeController@list')->name('list');
    Route::get('/post', 'page\HomeController@list')->name('list');
    Route::get('/put', 'page\HomeController@list')->name('list');
    Route::get('/patch', 'page\HomeController@list')->name('list');
    Route::get('/delete', 'page\HomeController@list')->name('list');
});
Route::get('/create', 'page\HomeController@create')->name('create');
Route::get('/update', 'page\HomeController@update')->name('update');
Route::get('/delete', 'page\HomeController@delete')->name('delete');

Route::get('/home', 'HomeController@index')->name('home');
