<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Auth\AuthController@showLoginForm');

Route::auth();

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::resource('hotels', 'HotelsController');
    Route::resource('hotels.comments', 'CommentsController');
    Route::get('/home', 'HotelsController@index');
});
