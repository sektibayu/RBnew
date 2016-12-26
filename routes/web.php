<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});

Route::get('reservasi','ReservationController@DisplayPendingRequest');
route::post('reservasi','ReservationController@ReservationInput');

Route::post('login', 'AdminController@login');

route::get('form','UserFormController@index');
route::post('form','UserFormController@store');

Route::group(['middleware' => ['auth']], function () {
	Route::get('admin/jadwal', 'AdminController@index');
	Route::get('admin/reservasi', 'AdminController@index');
	Route::get('admin', 'AdminController@index');
	Route::get('admin/user', 'UserController@index');
	Route::get('admin/logout','AdminController@logout');
});