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

Route::get('/', function() {
	//return View::make('hello');
	return User::all();
});

Route::get('user/create/character', array(
	'uses'	=>	'UserController@createCharacter',
	'as'	=>	'createCharacter'
))->before('auth');

Route::get('user/dashboard', array(
	'uses'	=>	'UserController@showDashboard',
	'as'	=>	'dashboard'
))->before('auth');

/*Route::get('user/{user_name}', array(
	'uses'	=>	'UserController@showUserName',
));
*/
Route::get('user/{id}/posts', array(
	'uses'	=>	'UserController@showUserPosts',
	'as'	=>	'userPosts'
));

Route::get('admin', function() {
	return 'The fax machine is in danger.';
})->before('auth');

// Add special bananes before the resource
Route::resource('user', 'UserController');

Route::get('login', 'SessionController@create');
Route::get('logout', 'SessionController@destroy');
Route::resource('session', 'SessionController');

//Route::get('user/profile/{id}', 'UserController@showProfile');
