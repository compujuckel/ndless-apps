<?php

class Author extends Eloquent {
	protected $hidden = array('created_at', 'updated_at');
	
	public function projects()
	{
		return $this->belongsToMany('Project','project_authors','project','author');
	}
}