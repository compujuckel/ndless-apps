<?php

class ProjectController extends \BaseController {

	public function __construct()
	{
		$this->beforeFilter('auth', array(
			'except' => array(
				'index',
				'show'
			)
		));
	}
	
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
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('project.edit')
			->withProject(
				Project::with('authors','versions')
					->findOrFail($id)
			)
			->withAuthors(
				DB::table('authors')
					->whereNotIn('id', function($query) use ($id) {
						$query->select('author')
							->from('project_authors')
							->where('project', '=', $id)
							->get();
					})
					->orderBy('name')
					->get()
			)
			->withVersions(
				DB::table('ndless')
					->whereNotIn('id', function($query) use ($id) {
						$query->select('version')
							->from('compatibility')
							->where('project', '=', $id)
							->get();
					})
					->orderBy('version')
					->get()
			);
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		if(Input::has('edit'))
		{
			$rules = array(
				'name' => 'required',
				'description' => 'required',
				'website' => 'required|url',
				'tiplanet' => 'required|numeric',
				'ticalc' => 'required|numeric',
			);
			
			$input = Input::all();
			$validator = Validator::make($input,$rules);
			
			if($validator->fails())
			{
				return Redirect::to("/projects/$id/edit")->withErrors($validator);
			}
			
			$project = Project::findOrFail($id);
			
			$project->name = $input['name'];
			$project->description = $input['description'];
			$project->website = $input['website'];
			$project->tiplanet = $input['tiplanet'];
			$project->ticalc = $input['ticalc'];
			$project->classic = Input::has('classic');
			$project->cx = Input::has('cx');
			
			$project->save();
			
			return Redirect::to("/projects/$id/edit");
		}
		elseif(Input::has('author_rem'))
		{
			$rules = array(
				'author_rem' => 'required|numeric|exists:authors,id'
			);
			
			$input = Input::all();
			$validator = Validator::make($input,$rules);
			
			if($validator->fails())
			{
				return Redirect::to("/projects/$id/edit")->withErrors($validator);
			}
			
			Project::findOrFail($id)->authors()->detach($input['author_rem']);
			
			return Redirect::to("/projects/$id/edit");
		}
		elseif(Input::has('author_add'))
		{
			$rules = array(
				'author' => 'required|numeric|exists:authors,id'
			);
			
			$input = Input::all();
			$validator = Validator::make($input,$rules);
			
			if($validator->fails())
			{
				return Redirect::to("/projects/$id/edit")->withErrors($validator);
			}
			
			Project::findOrFail($id)->authors()->attach($input['author']);
			
			return Redirect::to("/projects/$id/edit");
		}
		
		elseif(Input::has('version_rem'))
		{
			$rules = array(
				'version_rem' => 'required|numeric|exists:ndless,id'
			);
			
			$input = Input::all();
			$validator = Validator::make($input,$rules);
			
			if($validator->fails())
			{
				return Redirect::to("/projects/$id/edit")->withErrors($validator);
			}
			
			Project::findOrFail($id)->versions()->detach($input['version_rem']);
			
			return Redirect::to("/projects/$id/edit");
		}
		elseif(Input::has('version_add'))
		{
			$rules = array(
				'version' => 'required|numeric|exists:ndless,id'
			);
			
			$input = Input::all();
			$validator = Validator::make($input,$rules);
			
			if($validator->fails())
			{
				return Redirect::to("/projects/$id/edit")->withErrors($validator);
			}
			
			Project::findOrFail($id)->versions()->attach($input['version']);
			
			return Redirect::to("/projects/$id/edit");
		}
	}


}