@extends('layouts.master')

@section('styles')
	<link href="/css/login.less" rel="stylesheet/less" type="text/css">
@stop

@section('content')
	<div class="container">
		<form role="form" method="POST">
			<h2>Sign in or register</h2>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
				<input type="text" class="form-control" placeholder="Username" name="username" required autofocus>
			</div>
			<br />
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span>
				<input type="password" class="form-control" placeholder="Password" name="password" required>
			</div>
			<label class="checkbox">
				<input type="checkbox" name="remember"> Remember me
			</label>
			<button class="btn btn-lg btn-primary btn-block" type="submit" name="action" value="login"><i class="fa fa-sign-in"></i> Sign in</button>
			<button class="btn btn-default btn-block" type="submit" name="action" value="register"><i class="fa fa-key"></i> Register</button>
			@if($errors->any())
				<br />
				<div class="alert alert-danger">{{{ $errors->first() }}}</div>
			@endif
		</form>
	</div>
@stop