<?php

class Ndless extends Eloquent {
	protected $table = 'ndless';
	
	public function projects()
	{
		return $this->belongsToMany('Project', 'compatibility', 'project', 'version');
	}
}