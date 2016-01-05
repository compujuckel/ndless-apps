<?php namespace App\Http\Middleware;

use Closure;

class AutoLanguage {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$url_lang = $request->segment(1);
		$session_lang = session()->get('language');
		$browser_lang = substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);

		if(!empty($url_lang) && in_array($url_lang, config()->get('app.languages')))
		{
			if($url_lang != $session_lang)
				session()->put('language',$url_lang);
			
			app()->setLocale($url_lang);
		}
		else if(!empty($session_lang) && in_array($session_lang, config()->get('app.languages')))
		{
			app()->setLocale($session_lang);
		}
		else if(!empty($browser_lang) AND in_array($browser_lang, config()->get('app.languages')))
		{
			if($browser_lang != $session_lang)
				session()->put('language',$browser_lang);

			app()->setLocale($browser_lang);
		}
		else
		{
			app()->setLocale(config()->get('app.locale'));
		}
		
		return $next($request);
	}

}
