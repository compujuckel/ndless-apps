@extends('layouts.master')

@section('content')
	<div class="container">
		<h1>Edit {{{ $project->name }}}</h1>
		<div class="row">
			<div class="col-md-6">
				<form role="form" method="POST" action="/projects/{{ $project->id }}">
					<input type="hidden" name="_method" value="PATCH">
					<div class="panel panel-primary">
						<div class="panel-heading">Edit app</div>
						<div class="panel-body">
							@if($errors->any())
								<div class="alert alert-danger">{{{ $errors->first() }}}</div>
							@endif
							<div class="form-group">
								<label for="inputName">Name</label>
								<input class="form-control" type="text" id="inputName" name="name" value="{{{ $project->name }}}">
							</div>
							<div class="form-group">
								<label for="inputDescription">Description</label>
								<input class="form-control" type="text" id="inputDescription" name="description" value="{{{ $project->description }}}">
							</div>
							<div class="form-group">
								<label for="inputWebsite">Website</label>
								<input class="form-control" type="text" id="inputWebsite" name="website" value="{{{ $project->website }}}">
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="inputTiPlanetId">TI-Planet ID</label>
										<input class="form-control" type="text" id="inputTiPlanetId" name="tiplanet" value="{{{ $project->tiplanet }}}">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="inputTicalcId">ticalc ID</label>
										<input class="form-control" type="text" id="inputTicalcId" name="ticalc" value="{{{ $project->ticalc }}}">
									</div>
								</div>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="classic" {{ $project->classic ? 'checked' : '' }}>Classic support
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="cx" {{ $project->cx ? 'checked' : '' }}>CX support
								</label>
							</div>
							<button type="submit" class="btn btn-primary" name="edit" value="app"><i class="fa fa-check"></i> Save changes</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-6">
				<form role="form" method="POST" action="/projects/{{ $project->id }}">
					<input type="hidden" name="_method" value="PUT">
					<div class="panel panel-default">
						<div class="panel-heading">Edit authors</div>
						<table class="table">
							<colgroup>
								<col style="width: 75%">
								<col style="width: 25%">
							</colgroup>
							<thead>
								<tr>
									<th>Name</th>
									<th>Action</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<td>
										<select class="form-control" name="author">
											@foreach($authors as $author)
											<option value="{{ $author->id }}">{{{ $author->name }}}</option>
											@endforeach
										</select>
									</td>
									<td><button type="submit" class="btn btn-primary btn-block" name="author_add" value="1"><i class="fa fa-plus fa-fw"></i> Add</button></td>
								</tr>
							</tfoot>
							<tbody>
								@foreach($project->authors as $author)
								<tr>
									<td>{{{ $author->name }}}</td>
									<td><button type="submit" class="btn btn-danger btn-xs btn-block" name="author_rem" value="{{ $author->id }}"><i class="fa fa-minus fa-fw"></i> Remove</button></td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</form>
				<form role="form" method="POST" action="/projects/{{ $project->id }}">
					<input type="hidden" name="_method" value="PUT">
					<div class="panel panel-default">
						<div class="panel-heading">Edit supported Ndless versions</div>
						<table class="table">
							<colgroup>
								<col style="width: 75%">
								<col style="width: 25%">
							</colgroup>
							<thead>
								<tr>
									<th>Version</th>
									<th>Action</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<td>
										<select class="form-control" name="version">
											@foreach($versions as $version)
											<option value="{{ $version->id }}">{{{ $version->version }}}</option>
											@endforeach
										</select>
									</td>
									<td><button type="submit" class="btn btn-primary btn-block" name="version_add" value="1"><i class="fa fa-plus fa-fw"></i> Add</button></td>
								</tr>
							</tfoot>
							<tbody>
								@foreach($project->versions as $version)
								<tr>
									<td>{{{ $version->version }}}</td>
									<td><button type="submit" class="btn btn-danger btn-xs btn-block" name="version_rem" value="{{ $version->id }}"><i class="fa fa-minus fa-fw"></i> Remove</button></td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</form>
			</div>
		</div>
	</div>
@stop