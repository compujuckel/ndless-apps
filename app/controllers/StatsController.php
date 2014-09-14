<?php

class StatsController extends BaseController {
	public function getIndex()
	{
		return View::make('stats', array(
			'authors' => DB::table('authors')->count(),
			'projects' => DB::table('projects')->count(),
			'clicks' => DB::table('projects')->sum('clicks'),
			'cx' => DB::table('projects')->where('cx',1)->count(),
			'classic' => DB::table('projects')->where('classic',1)->count(),
			'comp' => DB::table('compatibility')
					->join('ndless', 'compatibility.version', '=', 'ndless.id')
					->groupBy('compatibility.version')
					->orderBy('count', 'DESC')
					->select(DB::raw('count(project) as count, ndless.version as version'))
					->get(),
			'author' => DB::table('project_authors')
					->join('authors', 'author', '=', 'id')
					->groupBy('name')
					->orderBy('count', 'DESC')
					->select(DB::raw('count(project) as count, name'))
					->take(10)
					->get()
		));
	}
}