<?php

class StatsController extends BaseController {
	public function getIndex()
	{
		return View::make('stats', array(
            'data' => array(
                'countAuthors' => DB::table('authors')->count(),
                'countProjects' => DB::table('projects')->count(),
                'countClicks' => DB::table('projects')->sum('clicks'),
                'countCx' => DB::table('projects')->where('cx',1)->count(),
                'countClassic' => DB::table('projects')->where('classic',1)->count(),
                'comp' => DB::table('compatibility')
                    ->join('ndless', 'compatibility.version', '=', 'ndless.id')
                    ->groupBy('compatibility.version')
                    ->orderBy('version', 'DESC')
                    ->select(DB::raw('count(project) as count, ndless.version as version'))
                    ->get(),
                'author' => DB::table('project_authors')
                    ->join('authors', 'author', '=', 'id')
                    ->groupBy('name')
                    ->orderBy('count', 'DESC')
                    ->select(DB::raw('count(project) as count, name'))
                    ->take(10)
                    ->get()
            )
		));
	}
}