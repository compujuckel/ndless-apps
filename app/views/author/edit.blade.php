@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form role="form" method="POST" action="/authors/{{ $author->id }}">
					<input type="hidden" name="_method" value="PATCH">
					<div class="panel panel-primary">
						<div class="panel-heading">{{ trans('authors.edit') }}</div>
						<div class="panel-body">
							@if($errors->any())
								<div class="alert alert-danger">{{{ $errors->first() }}}</div>
							@endif
							<div class="form-group">
								<label for="inputName">{{ trans('master.name') }}</label>
								<input class="form-control" type="text" id="inputName" name="name" value="{{{ $author->name }}}">
							</div>
							<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> {{ trans('authors.edit') }}</button>
							<a class="btn btn-danger {{ $author->projects()->count() > 0 ? 'disabled' : '' }}" data-toggle="modal" data-target=".delete-modal"><i class="fa fa-trash-o"></i> {{ trans('master.delete') }}</a>
						</div>
					</div>
				</form>
				<div class="modal fade delete-modal" tabindex="-1" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4><i class="fa fa-trash-o"></i> {{{ trans('master.delete_obj', array('name' => $author->name)) }}}</h4>
							</div>
							<div class="modal-body">
								{{ trans('authors.yousure') }}
							</div>
							<div class="modal-footer">
								<form method="POST" action="/authors/{{ $author->id }}">
									<input type="hidden" name="_method" value="DELETE">
									<button type="submit" class="btn btn-danger">{{ trans('master.yes') }}</button>
									<a href="#" class="btn btn-default" data-dismiss="modal">{{ trans('master.no') }}</a>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop