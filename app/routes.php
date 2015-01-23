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

Route::get('/', 'ProjectController@index');

// for manually setting the preferred language
foreach(Config::get('app.languages') as $lang)
{
	Route::get("/$lang", function()
	{
		if(substr(URL::previous(),-1) == '/')
			return Redirect::back();
		else
			return Redirect::to('/');
	});
}

Route::get('logout', array('before' => 'csrf', function()
{
	Auth::logout();
	return Redirect::to('/');
}));

Route::get('impressum', function(){
	return View::make('impressum');
});

Route::get('projects/{id}/click', 'ProjectController@click');

Route::controller('login','LoginController');
Route::controller('account','AccountController');
Route::controller('stats','StatsController');

Route::resource('projects','ProjectController');
Route::resource('authors','AuthorController');
Route::resource('categories','CategoryController');
