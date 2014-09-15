<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	$url_lang = Request::segment(1);
	$cookie_lang = Cookie::get('language');
	$browser_lang = substr(Request::server('HTTP_ACCEPT_LANGUAGE'), 0, 2);

	if(!empty($url_lang) && in_array($url_lang, Config::get('app.languages')))
	{
		if($url_lang != $cookie_lang)
			Session::put('language', $url_lang);

		App::setLocale($url_lang);
	}
	else if(!empty($cookie_lang) && in_array($cookie_lang, Config::get('app.languages')))
	{
		App::setLocale($cookie_lang);
	}
	else if(!empty($browser_lang) AND in_array($browser_lang, Config::get('app.languages')))
	{
		if($browser_lang != $cookie_lang)
			Session::put('language', $browser_lang);

		App::setLocale($browser_lang);
	}
	else
	{
		App::setLocale(Config::get('app.locale'));
	}
});


App::after(function($request, $response)
{
	$lang = Session::get('language');
	if(!empty($lang))
		$response->withCookie(Cookie::forever('language',$lang));
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::guest('login');
});


Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});