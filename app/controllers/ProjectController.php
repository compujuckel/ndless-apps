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
		
		$ttl = Config::get('cache.ttl');
		
		$projects = Cache::remember('projects', $ttl, function()
		{
			return Project::with('authors','versions','categories')
					->get()
					->sortBy('name');
		});
		
		$mostClicked = Cache::remember('mostClicked', $ttl, function()
		{
			return Project::with('authors','versions')
					->orderBy('clicks','desc')
					->take(3)
					->get();
		});
		
		$featured = Cache::remember('featured', $ttl, function()
		{
			return Project::with('authors','versions')
					->orderBy('featured','desc')
					->take(3)
					->get();
		});
		
		return View::make('project.index')
			->withProjects(
				$projects
			)
			->withMostclicked(
				$mostClicked
			)
			->withFeatured(
				$featured
			);
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('project.create');
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
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
			return Redirect::to("/projects/create")->withErrors($validator)->withInput();
		}
		
		$project = new Project;
		
		$project->name = $input['name'];
		$project->description = $input['description'];
		$project->website = $input['website'];
		$project->tiplanet = $input['tiplanet'];
		$project->ticalc = $input['ticalc'];
		$project->classic = Input::has('classic');
		$project->cx = Input::has('cx');
		
		$project->save();
		
		Cache::flush();
		
		return Redirect::to("/projects/{$project->id}/edit");
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
				Project::with('authors','versions','categories')
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
					->orderBy('version', 'desc')
					->get()
			)
			->withCategories(
				DB::table('categories')
					->whereNotIn('id', function($query) use ($id) {
						$query->select('category')
							->from('project_categories')
							->where('project', '=', $id)
							->get();
					})
					->orderBy('name')
					->get()
			)
			->withScreenshot(
				file_exists(public_path() . "/img/screenshot/{$id}.png")
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
			
			Cache::flush();
			
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
			
			Cache::flush();
			
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
			
			Cache::flush();
			
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
			
			Cache::flush();
			
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
			
			Cache::flush();
			
			return Redirect::to("/projects/$id/edit");
		}
		elseif(Input::has('category_rem'))
		{
			$rules = array(
				'category_rem' => 'required|numeric|exists:categories,id'
			);
			
			$input = Input::all();
			$validator = Validator::make($input,$rules);
			
			if($validator->fails())
			{
				return Redirect::to("/projects/$id/edit")->withErrors($validator);
			}
			
			Project::findOrFail($id)->categories()->detach($input['category_rem']);
			
			Cache::flush();
			
			return Redirect::to("/projects/$id/edit");
		}
		elseif(Input::has('category_add'))
		{
			$rules = array(
				'category' => 'required|numeric|exists:categories,id'
			);
			
			$input = Input::all();
			$validator = Validator::make($input,$rules);
			
			if($validator->fails())
			{
				return Redirect::to("/projects/$id/edit")->withErrors($validator);
			}
			
			Project::findOrFail($id)->categories()->attach($input['category']);
			
			Cache::flush();
			
			return Redirect::to("/projects/$id/edit");
		}
		elseif(Input::has('screenshot_add'))
		{
			if(!Input::hasFile('screenshot')
				|| !Input::file('screenshot')->isValid()
				|| Input::file('screenshot')->getMimeType() != 'image/png')
			{
				return Redirect::to("/projects/$id/edit")
						->withErrors(array('message' => 'The file you uploaded is invalid.'));
			}
			
			Input::file('screenshot')->move(public_path() . '/img/screenshot',"{$id}.png");
			
			return Redirect::to("/projects/$id/edit");
		}
		elseif(Input::has('screenshot_rem'))
		{
			if(file_exists(public_path() . "/img/screenshot/{$id}.png"))
				unlink(public_path() . "/img/screenshot/{$id}.png");
			
			return Redirect::to("/projects/$id/edit");
		}
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Project::destroy($id);
		
		Cache::flush();
		
		return Redirect::to("/projects");
	}
	
	public function click($id)
	{
		$project = Project::findOrFail($id);
		$project->clicks = $project->clicks + 1;
		$project->save();
	}

}