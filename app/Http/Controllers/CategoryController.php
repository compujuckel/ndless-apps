<?php

class CategoryController extends \BaseController {

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('category.show')
			->withCategory(
				DB::table('categories')
					->select(DB::raw('count(project) as count, name, id'))
					->where('id', '=', $id)
					->join('project_categories', 'project_categories.category', '=', 'categories.id')
					->first()
			)
			->withProjects(
				Category::findOrFail($id)->projects->sortBy(function($project) {
					return strtolower($project->name);
				})
			);
	}


}
