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

Route::middleware('auth')->group(function(){

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/users','User\UserController@index')->name('users.index');
    Route::get('/users/add','User\UserController@create')->name('users.add');
    Route::post('/users/add','User\UserController@store')->name('users.store');
    Route::get('/users/show/{id}','User\UserController@show')->name('user.show');
    Route::get('/users/edit/{id}','User\UserController@edit')->name('user.edit');
    Route::get('/users/archive/{id}','User\UserController@archive')->name('user.archive');
});

Auth::routes();

