<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="/css/bootstrap.min.css" rel="stylesheet">
		<link href="/css/font-awesome.min.css" rel="stylesheet">
		@if(App::environment() == "euve34239")
		<link href="/css/styles.min.css" rel="stylesheet">
		@else
		<link href="/css/styles.less" rel="stylesheet/less" type="text/css">
		@endif
		@yield('styles')
		
		<title>{{ trans('master.title') }}</title>
	</head>
	<body>
		@if(!isset($navbar) || $navbar == true)
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
						<span class="sr-only">{{ trans('master.togglenav') }}</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">{{ trans('master.apps') }}</a>
				</div>
				<div class="collapse navbar-collapse" id="navbar">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ trans('master.categories') }} <b class="caret"></b></a>
							<ul class="dropdown-menu">
								@for($i = 1; $i <= 5; $i++)
								<li><a href="/categories/{{ $i }}">{{ Lang::choice("categories.$i",2) }}</a></li>
								@endfor
							</ul>
						</li>
						@yield('navbar')
						<li><a href="/authors">{{ trans('master.authors') }}</a></li>
						<li><a href="/stats">{{ trans('master.stats') }}</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<p class="navbar-text">
							@foreach(Config::get('app.languages') as $lang)
							<a href="/{{ $lang }}" class="">{{ strtoupper($lang) }}</a>
							@endforeach
						<li><a href="https://github.com/compujuckel/ndless-apps/issues"><i class="fa fa-bug"></i> {{ trans('master.bug') }}</a></li>
						@if(Auth::check())
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{{ Auth::user()->name }}} <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="/account"><i class="fa fa-cog"></i> {{ trans('master.settings') }}</a></li>
								<li><a href="/logout?_token={{ csrf_token() }}"><i class="fa fa-sign-out"></i> {{ trans('master.logout') }}</a></li>
							</ul>
						</li>
						@else
						<li><a href="/login"><i class="fa fa-sign-in"></i> {{ trans('master.login') }}</a></li>
						@endif
					</ul>
				</div>
			</div>
		</nav>
		@endif
		
		@yield('content')
		
		<script src="/js/jquery.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		@if(App::environment() != "euve34239")
		<script src="/js/less.min.js"></script>
		@endif
		<script src="/js/list.min.js"></script>
		<script src="/js/holder.js"></script>
		<script src="/js/smooth-scroll.js"></script>
		@yield('scripts')
	</body>
</html>