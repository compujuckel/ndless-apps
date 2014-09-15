@extends('layouts.master')

@section('content')
	<div class="container">
		<h1>{{{ trans('projects.edit_title', array('name' => $project->name)) }}}</h1>
		<div class="row">
			<div class="col-md-6">
				<form role="form" method="POST" action="/projects/{{ $project->id }}">
					<input type="hidden" name="_method" value="PATCH">
					<div class="panel panel-primary">
						<div class="panel-heading">{{ trans('projects.edit') }}</div>
						<div class="panel-body">
							@if($errors->any())
								<div class="alert alert-danger">{{{ $errors->first() }}}</div>
							@endif
							<div class="form-group">
								<label for="inputName">{{ trans('master.name') }}</label>
								<input class="form-control" type="text" id="inputName" name="name" value="{{{ $project->name }}}">
							</div>
							<div class="form-group">
								<label for="inputDescription">{{ trans('projects.description') }}</label>
								<input class="form-control" type="text" id="inputDescription" name="description" value="{{{ $project->description }}}">
							</div>
							<div class="form-group">
								<label for="inputWebsite">{{ trans('projects.website') }}</label>
								<input class="form-control" type="text" id="inputWebsite" name="website" value="{{{ $project->website }}}">
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="inputTiPlanetId">{{ trans('projects.tiplanet') }}</label>
										<input class="form-control" type="text" id="inputTiPlanetId" name="tiplanet" value="{{{ $project->tiplanet }}}">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="inputTicalcId">{{ trans('projects.ticalc') }}</label>
										<input class="form-control" type="text" id="inputTicalcId" name="ticalc" value="{{{ $project->ticalc }}}">
									</div>
								</div>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="classic" {{ $project->classic ? 'checked' : '' }}>{{ trans('projects.clsupport') }}
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="cx" {{ $project->cx ? 'checked' : '' }}>{{ trans('projects.cxsupport') }}
								</label>
							</div>
							<button type="submit" class="btn btn-primary" name="edit" value="app"><i class="fa fa-check"></i> {{ trans('projects.save') }}</button>
							<a class="btn btn-danger" data-toggle="modal" data-target=".delete-modal"><i class="fa fa-trash-o"></i> {{ trans('master.delete') }}</a>
						</div>
					</div>
				</form>
				<div class="modal fade delete-modal" tabindex="-1" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4><i class="fa fa-trash-o"></i> {{{ trans('master.delete_obj', array('name' => $project->name)) }}}</h4>
							</div>
							<div class="modal-body">
								{{ trans('projects.yousure') }}
							</div>
							<div class="modal-footer">
								<form method="POST" action="/projects/{{ $project->id }}">
									<input type="hidden" name="_method" value="DELETE">
									<button type="submit" class="btn btn-danger">{{ trans('master.yes') }}</button>
									<a href="#" class="btn btn-default" data-dismiss="modal">{{ trans('master.no') }}</a>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<form role="form" method="POST" action="/projects/{{ $project->id }}">
					<input type="hidden" name="_method" value="PUT">
					<div class="panel panel-default">
						<div class="panel-heading">{{ trans('projects.authors') }}</div>
						<table class="table">
							<colgroup>
								<col style="width: 75%">
								<col style="width: 25%">
							</colgroup>
							<thead>
								<tr>
									<th>{{ trans('master.name') }}</th>
									<th>{{ trans('master.action') }}</th>
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
									<td><button type="submit" class="btn btn-primary btn-block" name="author_add" value="1"><i class="fa fa-plus fa-fw"></i> {{ trans('master.add') }}</button></td>
								</tr>
							</tfoot>
							<tbody>
								@foreach($project->authors as $author)
								<tr>
									<td>{{{ $author->name }}}</td>
									<td><button type="submit" class="btn btn-danger btn-xs btn-block" name="author_rem" value="{{ $author->id }}"><i class="fa fa-minus fa-fw"></i> {{ trans('master.remove') }}</button></td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</form>
				<form role="form" method="POST" action="/projects/{{ $project->id }}">
					<input type="hidden" name="_method" value="PUT">
					<div class="panel panel-default">
						<div class="panel-heading">{{ trans('projects.ndless') }}</div>
						<table class="table">
							<colgroup>
								<col style="width: 75%">
								<col style="width: 25%">
							</colgroup>
							<thead>
								<tr>
									<th>{{ trans('projects.version') }}</th>
									<th>{{ trans('master.action') }}</th>
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
									<td><button type="submit" class="btn btn-primary btn-block" name="version_add" value="1"><i class="fa fa-plus fa-fw"></i> {{ trans('master.add') }}</button></td>
								</tr>
							</tfoot>
							<tbody>
								@foreach($project->versions as $version)
								<tr>
									<td>{{{ $version->version }}}</td>
									<td><button type="submit" class="btn btn-danger btn-xs btn-block" name="version_rem" value="{{ $version->id }}"><i class="fa fa-minus fa-fw"></i> {{ trans('master.remove') }}</button></td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</form>
				<form role="form" method="POST" action="/projects/{{ $project->id }}">
					<input type="hidden" name="_method" value="PUT">
					<div class="panel panel-default">
						<div class="panel-heading">{{ trans('projects.categories') }}</div>
						<table class="table">
							<colgroup>
								<col style="width: 75%">
								<col style="width: 25%">
							</colgroup>
							<thead>
								<tr>
									<th>{{ trans('master.name') }}</th>
									<th>{{ trans('master.action') }}</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<td>
										<select class="form-control" name="category">
											@foreach($categories as $category)
											<option value="{{ $category->id }}">{{ Lang::choice("categories.{$category->id}",1) }}</option>
											@endforeach
										</select>
									</td>
									<td><button type="submit" class="btn btn-primary btn-block" name="category_add" value="1"><i class="fa fa-plus fa-fw"></i> {{ trans('master.add') }}</button></td>
								</tr>
							</tfoot>
							<tbody>
								@foreach($project->categories as $category)
								<tr>
									<td>{{ Lang::choice("categories.{$category->id}",1) }}</td>
									<td><button type="submit" class="btn btn-danger btn-xs btn-block" name="category_rem" value="{{ $category->id }}"><i class="fa fa-minus fa-fw"></i> {{ trans('master.remove') }}</button></td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</form>
				<form role="form" method="POST" action="/projects/{{ $project->id }}" enctype="multipart/form-data">
					<input type="hidden" name="_method" value="PUT">
					<div class="panel panel-default">
						<div class="panel-heading">{{ trans('projects.screenshot') }}</div>
						<div class="panel-body">
							@if($screenshot)
							<strong>{{ trans('projects.curscreen') }}</strong>
							<img src="/img/screenshot/{{ $project->id }}.png" class="img-responsive" width="320" height="240">
							@else
							{{ trans('projects.noscreen') }}
							@endif
							<p>
								{{ trans('projects.upscreen') }}
								<input name="screenshot" type="file" accept="image/png">
								<button type="submit" class="btn btn-primary" name="screenshot_add" value="1"><i class="fa fa-upload"></i> {{ trans('projects.upload') }}</button>
								<button type="submit" class="btn btn-danger" name="screenshot_rem" value="1"><i class="fa fa-trash-o"></i> {{ trans('master.delete') }}</button>
							</p>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@stop