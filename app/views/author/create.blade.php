@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form role="form" method="POST" action="/authors">
					<div class="panel panel-primary">
						<div class="panel-heading">{{ trans('authors.create') }}</div>
						<div class="panel-body">
							@if($errors->any())
								<div class="alert alert-danger">{{{ $errors->first() }}}</div>
							@endif
							<div class="form-group">
								<label for="inputName">{{ trans('master.name') }}</label>
								<input class="form-control" type="text" id="inputName" name="name" value="{{{ Input::old('name') }}}">
							</div>
							<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> {{ trans('authors.create') }}</button><br>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@stop