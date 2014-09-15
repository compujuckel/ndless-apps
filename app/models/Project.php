<?php

class Project extends Eloquent {
	protected $hidden = array('created_at', 'updated_at');
	protected $appends = array('stars');

	public function authors()
	{
		return $this->belongsToMany('Author','project_authors','project','author');
	}
	
	public function categories()
	{
		return $this->belongsToMany('Category','project_categories','project','category');
	}
	
	public function versions()
	{
		return $this->belongsToMany('Ndless','compatibility','project','version')->orderBy('version');
	}
	
	function getClassicFormattedAttribute()
	{
		if($this->classic)
			return '<span class="label label-success">Classic</span>';
		else
			return '<span class="label label-danger">Classic</span>';
	}
	
	function getCxFormattedAttribute()
	{
		if($this->cx)
			return '<span class="label label-success">CX</span>';
		else
			return '<span class="label label-danger">CX</span>';
	}
	
	function getDownloadLinkAttribute()
	{
		if($this->tiplanet)
			return "http://tiplanet.org/forum/archives_voir.php?id={$this->tiplanet}";
		elseif($this->ticalc)
			return "http://www.ticalc.org/archives/files/fileinfo/".substr(strval($this->ticalc),0,3)."/{$this->ticalc}.html";
		else
			return;
	}
}