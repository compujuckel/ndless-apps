@extends('layouts.master')

@section('styles')
	<link href="/css/login.less" rel="stylesheet/less" type="text/css">
@stop

@section('content')
	<div class="container">
		<form role="form" method="POST">
			<h2>{{ trans('login.title') }}</h2>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
				<input type="text" class="form-control" placeholder="{{ trans('login.username') }}" name="username" required autofocus>
			</div>
			<br />
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span>
				<input type="password" class="form-control" placeholder="{{ trans('login.password') }}" name="password" required>
			</div>
			<label class="checkbox">
				<input type="checkbox" name="remember"> {{ trans('login.remember') }}
			</label>
			<button class="btn btn-lg btn-primary btn-block" type="submit" name="action" value="login"><i class="fa fa-sign-in"></i> {{ trans('login.signin') }}</button>
			<button class="btn btn-default btn-block" type="submit" name="action" value="register"><i class="fa fa-key"></i> {{ trans('login.register') }}</button>
			@if($errors->any())
				<br />
				<div class="alert alert-danger">{{{ $errors->first() }}}</div>
			@endif
		</form>
	</div>
@stop