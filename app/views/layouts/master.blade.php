<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="/css/bootstrap.min.css" rel="stylesheet">
		<link href="/css/font-awesome.min.css" rel="stylesheet">
		<link href="/css/styles.less" rel="stylesheet/less" type="text/css">
		@yield('styles')
		
		<title>Ndless Apps</title>
	</head>
	<body>
		@if(!isset($navbar) || $navbar == true)
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">Apps</a>
				</div>
				<div class="collapse navbar-collapse" id="navbar">
					<ul class="nav navbar-nav">
						@yield('navbar')
						<li><a href="/authors">Authors</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#"><i class="fa fa-bug"></i> Report bug</a></li>
						@if(Auth::check())
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{{ Auth::user()->name }}} <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="/account"><i class="fa fa-cog"></i> Settings</a></li>
								<li><a href="/logout?_token={{ csrf_token() }}"><i class="fa fa-sign-out"></i> Logout</a></li>
							</ul>
						</li>
						@else
						<li><a href="/login"><i class="fa fa-sign-in"></i> Login</a></li>
						@endif
					</ul>
				</div>
			</div>
		</nav>
		@endif
		
		@yield('content')
		
		<script src="/js/jquery.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/less.min.js"></script>
		<script src="/js/list.min.js"></script>
		<script src="/js/holder.js"></script>
		<script src="/js/smooth-scroll.js"></script>
		@yield('scripts')
	</body>
</html>