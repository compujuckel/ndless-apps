<?php

class ProjectController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//return Project::with('authors','versions')->get()->toJson();
		return View::make('project.index')
			->withProjects(
				Project::with('authors','versions')
					->get()
					->sortBy('name')
			);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('project.show')
			->withProject(
				Project::with('authors','versions')
					->findOrFail($id)
			);
	}

}