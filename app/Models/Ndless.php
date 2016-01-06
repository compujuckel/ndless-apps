<?php

class Ndless extends Eloquent {
	protected $table = 'ndless';
	protected $appends = array('filter');
	
	public function projects()
	{
		return $this->belongsToMany('Project', 'compatibility', 'version', 'project');
	}
	
	public static function latest()
	{
		$ttl = Config::get('cache.ttl');
		
		return Cache::remember('latestVersion', $ttl, function() {
			return Ndless::orderBy('version','desc')->first();
		});
	}
	
	public static function current()
	{
		$ttl = Config::get('cache.ttl');
		
		return Cache::remember('currentVersions', $ttl, function() {
			return Ndless::where('deprecated', 0)->orderBy('version')->get();
		});
	}
	
	public function getFilterAttribute()
	{
		return str_replace('.', '', $this->version);
	}
}