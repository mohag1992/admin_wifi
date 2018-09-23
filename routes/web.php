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

Route::get('/dashboard','Backend\AuthController@dashboard');

 Route::group(['prefix' => 'backend'], function () {
 	Route::get('/register','Backend\AuthController@register');
 	Route::get('/','Backend\AuthController@showlogin');
 	Route::post('/user/dologin','Backend\AuthController@dologin');
 	Route::get('/event/create','Backend\EventController@create');
 	Route::post('/event/store','Backend\EventController@store');
 	Route::get('/event','Backend\EventController@index');
 	Route::get('/event/edit/{id}','Backend\EventController@edit');
 	Route::post('/event/update','Backend\EventController@update');
 	Route::get('/leaves','Backend\LeaveController@index');
 	Route::get('/api/events','Backend\EventController@geteventbyweek');
 	// Route::get('/department/create','Backend\DepartmentController@create');

 	Route::get('/user','Backend\UserController@index');

 	Route::get('/api/leave','Backend\LeaveController@leave');

 });

Route::get('firebase','FirebaseController@index');
Route::get('user/{name?}', function ($name = 'John') {
    return $name;
});
