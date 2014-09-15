@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form role="form" method="POST" action="/projects">
					<div class="panel panel-primary">
						<div class="panel-heading">{{ trans('projects.create') }}</div>
						<div class="panel-body">
							@if($errors->any())
								<div class="alert alert-danger">{{{ $errors->first() }}}</div>
							@endif
							<div class="form-group">
								<label for="inputName">{{ trans('master.name') }}</label>
								<input class="form-control" type="text" id="inputName" name="name" value="{{{ Input::old('name') }}}">
							</div>
							<div class="form-group">
								<label for="inputDescription">{{ trans('projects.description') }}</label>
								<input class="form-control" type="text" id="inputDescription" name="description" value="{{{ Input::old('description') }}}">
							</div>
							<div class="form-group">
								<label for="inputWebsite">{{ trans('projects.website') }}</label>
								<input class="form-control" type="text" id="inputWebsite" name="website" value="{{{ Input::old('website') }}}">
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="inputTiPlanetId">{{ trans('projects.tiplanet') }}</label>
										<input class="form-control" type="text" id="inputTiPlanetId" name="tiplanet" value="{{{ Input::old('tiplanet') }}}">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="inputTicalcId">{{ trans('projects.ticalc') }}</label>
										<input class="form-control" type="text" id="inputTicalcId" name="ticalc" value="{{{ Input::old('ticalc') }}}">
									</div>
								</div>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="classic" {{ Input::old('classic') ? 'checked' : '' }}>{{ trans('projects.clsupport') }}
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="cx" {{ Input::old('cx') ? 'checked' : '' }}>{{ trans('projects.cxsupport') }}
								</label>
							</div>
							<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> {{ trans('projects.create') }}</button><br>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@stop