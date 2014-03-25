<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	//return View::make('hello');
	return User::all();
});

Route::get('user/dashboard', array(
	'uses'	=>	'UserController@showDashboard',
	'as'	=>	'dashboard'
));

/*Route::get('user/{user_name}', array(
	'uses'	=>	'UserController@showUserName',
));
*/
Route::get('user/{id}/posts', array(
	'uses'	=>	'UserController@showUserPosts',
	'as'	=>	'userPosts'
));

Route::resource('user', 'UserController');


//Route::get('user/profile/{id}', 'UserController@showProfile');
