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

Route::get('/', 'ScheduleController@index');

Route::get('reservasi','ReservationController@DisplayPendingRequest');
route::post('reservasi','ReservationController@ReservationInput');

route::get('form','UserFormController@index');
route::post('form','UserFormController@store');

Route::post('login', array(
		'before' => 'csrf', 
		'uses' => 'AdminController@login', 
		'as' => 'login'
));

Route::group(['middleware' => ['auth']], function () {
	Route::get('admin/jadwal', 'AdminController@index');
	Route::get('admin/reservasi', 'AdminController@index');
	Route::get('admin', function () {
	    return view('pages.admin.index');
	});
	Route::get('admin/user', 'UserController@index');
	Route::get('admin/logout','AdminController@logout');
});