<?php

class AuthorController extends \BaseController {

	public function __construct()
	{
		$this->middleware('auth', array(
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
		return View::make('author.index')
			->withAuthors(
				DB::table('authors')
					->select(DB::raw('id, count(project) as count, name'))
					->join('project_authors', 'project_authors.author', '=', 'authors.id')
					->groupBy('author')
					->orderBy('name')
					->get()
			);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('author.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'name' => 'required'
		);
		
		$input = Input::all();
		$validator = Validator::make($input,$rules);
		
		if($validator->fails())
		{
			return Redirect::to("/authors/create")->withErrors($validator)->withInput();
		}
		
		$author = new Author;
		
		$author->name = $input['name'];
		
		$author->save();
		
		return Redirect::to("/authors/{$author->id}");
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('author.show')
			->withAuthor(
				DB::table('authors')
					->select(DB::raw('count(project) as count, name, id'))
					->where('id', '=', $id)
					->join('project_authors', 'project_authors.author', '=', 'authors.id')
					->first()
			)
			->withProjects(
				Author::findOrFail($id)->projects->sortBy(function($project) {
					return strtolower($project->name);
				})
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
		return View::make('author.edit')
			->withAuthor(
				Author::findOrFail($id)
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
		$rules = array(
			'name' => 'required'
		);
		
		$input = Input::all();
		$validator = Validator::make($input,$rules);
		
		if($validator->fails())
		{
			return Redirect::to("/authors/$id")->withErrors($validator);
		}
		
		$author = Author::findOrFail($id);
		
		$author->name = $input['name'];
		
		$author->save();
		
		return Redirect::to("/authors/{$author->id}");
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Author::destroy($id);
		
		return Redirect::to('/authors');
	}

}