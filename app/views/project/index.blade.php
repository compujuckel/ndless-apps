@extends('layouts.master')

@section('navbar')
	<li><a data-scroll href="#featured">Featured</a></li>
	<li><a data-scroll href="#starred">Most starred</a></li>
	<li><a data-scroll href="#all">All</a></li>
@stop

@section('content')
	<div class="section-one">
		<div class="container">
			<h1>Ndless Apps</h1>
		</div>
	</div>
	<div class="section-two">
		<a class="anchor" id="featured"></a>
		<div class="container">
			<h2><i class="fa fa-thumb-tack"></i> Featured</h2>
			<div class="row">
				<div class="col-md-4 text-center">
					<img data-src="holder.js/320x240" class="img-responsive" alt="rofl">
					<h3>Project 1</h3>
					<p>
						lol
					</p>
					<p>
						<span class="label label-success">3.1</span>
						<span class="label label-success">3.6</span>
						<span class="label label-success">Classic</span>
						<span class="label label-success">CX</span>
					</p>
					<p>
						<button class="btn btn-default btn-xs btn-star"><i class="fa fa-star-o"></i> 1</button>
						<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-download"></i> Download</a>
					</p>
				</div>
				<div class="col-md-4 text-center">
					<img data-src="holder.js/320x240" class="img-responsive" alt="rofl">
					<h3>Project 2</h3>
					<p>
						lol
					</p>
					<p>
						<span class="label label-success">3.1</span>
						<span class="label label-success">3.6</span>
						<span class="label label-success">Classic</span>
						<span class="label label-success">CX</span>
					</p>
					<p>
						<button class="btn btn-default btn-xs btn-star"><i class="fa fa-star-o"></i> 2</button>
						<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-download"></i> Download</a>
					</p>
				</div>
				<div class="col-md-4 text-center">
					<img data-src="holder.js/320x240" class="img-responsive" alt="rofl">
					<h3>Project 3</h3>
					<p>
						lol
					</p>
					<p>
						<span class="label label-success">3.1</span>
						<span class="label label-success">3.6</span>
						<span class="label label-success">Classic</span>
						<span class="label label-success">CX</span>
					</p>
					<p>
						<button class="btn btn-default btn-xs btn-star"><i class="fa fa-star-o"></i> 3</button>
						<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-download"></i> Download</a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="section-one">
		<a class="anchor" id="starred"></a>
		<div class="container">
			<h2><i class="fa fa-star"></i> Most starred</h2>
			<div class="row">
				<div class="col-md-4 text-center">
					<img data-src="holder.js/320x240/#fff:#ccc" class="img-responsive" alt="rofl">
					<h3>Project 1</h3>
					<p>
						lol
					</p>
					<p>
						<span class="label label-success">3.1</span>
						<span class="label label-success">3.6</span>
						<span class="label label-success">Classic</span>
						<span class="label label-success">CX</span>
					</p>
					<p>
						<button class="btn btn-default btn-xs btn-star"><i class="fa fa-star-o"></i> 5</button>
						<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-download"></i> Download</a>
					</p>
				</div>
				<div class="col-md-4 text-center">
					<img data-src="holder.js/320x240/#fff:#ccc" class="img-responsive" alt="rofl">
					<h3>Project 2</h3>
					<p>
						lol
					</p>
					<p>
						<span class="label label-success">3.1</span>
						<span class="label label-success">3.6</span>
						<span class="label label-success">Classic</span>
						<span class="label label-success">CX</span>
					</p>
					<p>
						<button class="btn btn-default btn-xs btn-star"><i class="fa fa-star-o"></i> 3</button>
						<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-download"></i> Download</a>
					</p>
				</div>
				<div class="col-md-4 text-center">
					<img data-src="holder.js/320x240/#fff:#ccc" class="img-responsive" alt="rofl">
					<h3>Project 3</h3>
					<p>
						lol
					</p>
					<p>
						<span class="label label-success">3.1</span>
						<span class="label label-success">3.6</span>
						<span class="label label-success">Classic</span>
						<span class="label label-success">CX</span>
					</p>
					<p>
						<button class="btn btn-default btn-xs btn-star"><i class="fa fa-star-o"></i> 2</button>
						<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-download"></i> Download</a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="section-two">
		<a class="anchor" id="all"></a>
		<div class="container" id="project-list">
			<h2><i class="fa fa-folder-open"></i> All Apps</h2>
			<form class="form-inline" role="form">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-search"></i></span>
						<input type="text" class="form-control search" placeholder="Search..."></input>
					</div>
				</div>
				<div class="form-group">
					<div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default filter-classic">
							<input type="checkbox">Classic
						</label>
						<label class="btn btn-default filter-cx">
							<input type="checkbox">CX
						</label>
					</div>
					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-sort"></i> Sort <span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#" class="sort-name"><i class="fa fa-sort-alpha-asc fa-fw"></i> Name</a></li>
							<li><a href="#" class="sort-downloads"><i class="fa fa-download fa-fw"></i> Downloads</a></li>
							<li><a href="#" class="sort-stars"><i class="fa fa-star fa-fw"></i> Stars</a></li>
						</ul>
					</div>
					@if(Auth::check() && Auth::user()->editor)
					<a href="/projects/create" class="btn btn-success"><i class="fa fa-plus"></i> Add</a>
					@endif
				</div>
			</form>
			<br />
			@include('project.partials.list', array('projects' => $projects))
		</div>
	</div>
@stop

@section('scripts')
	<script>
		function projectFilter(item)
		{
			if($('label.filter-classic').hasClass('active') && item.values().classic != 1)
				return false;
			if($('label.filter-cx').hasClass('active') && item.values().cx != 1)
				return false;
			return true;
		}
		
		$(document).ready(function(){
			smoothScroll.init();
		
			var options = {
				valueNames: [ 'name', 'description', 'classic', 'cx', 'downloads' ]
			};
		
			var projectList = new List('project-list', options);	
			projectList.filter(projectFilter);
			
			$('.sort-name').click(function(e){
				e.preventDefault();
				projectList.sort('name');
				projectList.update();
			});
			
			$('.sort-downloads').click(function(e){
				e.preventDefault();
				projectList.sort('downloads',{
					order: "desc"
				});
				projectList.update();
			});
			
			$('label.filter-classic, label.filter-cx').click(function(){
				setTimeout(function(){
					projectList.filter(projectFilter);
					projectList.update();
				},1);
			});
		});
	</script>
@stop