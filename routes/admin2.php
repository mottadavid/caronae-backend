<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

// Administrative pages

CRUD::resource('users', 'UserController')->with(function() {
    Route::post('users/{user}/ban', 'UserController@ban');
    Route::post('users/{user}/unban', 'UserController@unban');
});

Route::get('rides', 'RideController@index');
Route::get('rides.json', 'RideController@indexJson');