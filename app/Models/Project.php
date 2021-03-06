<?php

class Project extends Eloquent {
	protected $hidden = array('updated_at');

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
		return $this->belongsToMany('Ndless','compatibility','project','version')->orderBy('ndless.version');
	}
	
	function getDeprecatedAttribute()
	{
        $ttl = Config::get('cache.ttl');

	    $versions = Cache::remember('versions', $ttl, function() {
	        return DB::table('compatibility')
                ->select('compatibility.project')
                ->distinct()
                ->join('ndless', 'ndless.id', '=', 'compatibility.version')
                ->where('ndless.deprecated', '=', '0')
                ->get();
        });

	    foreach($versions as $elem) {
            if($elem->project == $this->id) {
                return false;
            }
        }

        return true;
	}

	function getClassicFormattedAttribute()
	{
		if($this->classic)
			return '<span class="label label-success classic">Classic</span>';
		else
			return '<span class="label label-danger classic">Classic</span>';
	}
	
	function getCxFormattedAttribute()
	{
		if($this->cx)
			return '<span class="label label-success cx">CX</span>';
		else
			return '<span class="label label-danger cx">CX</span>';
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
