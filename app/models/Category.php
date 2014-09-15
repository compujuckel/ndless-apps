<?php

class Category extends Eloquent {
	public function projects()
	{
		return $this->belongsToMany('Project','project_categories','category','project');
	}
}