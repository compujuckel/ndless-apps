@extends('layouts.master')

@section('navbar')
	<li><a data-scroll href="#featured">Featured</a></li>
	<li><a data-scroll href="#mostclicked">Most clicked</a></li>
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
				@foreach($featured as $project)
				<div class="col-md-4 text-center">
					@if(!file_exists("public/img/screenshot/{$project->id}.png"))
					<img data-src="holder.js/320x240/#eee:#fff/text:No screenshot available" class="img-responsive" alt="{{{ $project->name }}}">
					@else
					<img src="/img/screenshot/{{ $project->id }}.png" width="320" height="240" class="img-responsive" alt="{{{ $project->name }}}">
					@endif
					<h3><a href="{{{ $project->website }}}" class="count-{{ $project->id }} name">{{{ $project->name }}}</a></h3>
					<p>
						<small>
							@foreach($project->authors as $author)
							<a href="/authors/{{ $author->id }}" class="label label-default">{{{ $author->name }}}</a>
							@endforeach
						</small>
					</p>
					<p>
						{{{ $project->description }}}
					</p>
					<p>
						@foreach($project->versions as $version)
						@if(in_array($version->version,array('3.1','3.6')))
						<span class="label label-success">{{{ $version->version }}}</span>
						@else
						<span class="label label-warning">{{{ $version->version }}}</span>
						@endif
						@endforeach
						{{ $project->classic_formatted }}
						{{ $project->cx_formatted }}
					</p>
					<p>
						@if(Auth::check() && Auth::user()->editor)
						<a href="/projects/{{ $project->id }}/edit" class="btn btn-default btn-xs"><i class="fa fa-edit"></i> Edit</a>
						@endif
						@if($project->download_link)
						<a href="{{{ $project->download_link }}}" class="count-{{ $project->id }} btn btn-primary btn-xs btn-dl"><i class="fa fa-download"></i> Download <span class="badge downloads">{{ $project->clicks }}</span></a>
						@else
						<button class="btn btn-primary btn-xs btn-dl" disabled><i class="fa fa-download"></i> Download <span class="badge downloads">{{ $project->clicks }}</button>
						@endif
					</p>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<div class="section-one">
		<a class="anchor" id="mostclicked"></a>
		<div class="container">
			<h2><i class="fa fa-download"></i> Most clicked</h2>
			<div class="row">
				@foreach($mostclicked as $project)
				<div class="col-md-4 text-center">
					@if(!$project->screenshot)
					<img data-src="holder.js/320x240/#fff:#eee/text:No screenshot available" class="img-responsive" alt="{{{ $project->name }}}">
					@else
					<img src="{{{ $project->screenshot }}}" width="320" height="240" class="img-responsive" alt="{{{ $project->name }}}">
					@endif
					<h3><a href="{{{ $project->website }}}" class="count-{{ $project->id }} name">{{{ $project->name }}}</a></h3>
					<p>
						<small>
							@foreach($project->authors as $author)
							<a href="/authors/{{ $author->id }}" class="label label-default">{{{ $author->name }}}</a>
							@endforeach
						</small>
					</p>
					<p>
						{{{ $project->description }}}
					</p>
					<p>
						@foreach($project->versions as $version)
						@if(in_array($version->version,array('3.1','3.6')))
						<span class="label label-success">{{{ $version->version }}}</span>
						@else
						<span class="label label-warning">{{{ $version->version }}}</span>
						@endif
						@endforeach
						{{ $project->classic_formatted }}
						{{ $project->cx_formatted }}
					</p>
					<p>
						@if(Auth::check() && Auth::user()->editor)
						<a href="/projects/{{ $project->id }}/edit" class="btn btn-default btn-xs"><i class="fa fa-edit"></i> Edit</a>
						@endif
						@if($project->download_link)
						<a href="{{{ $project->download_link }}}" class="count-{{ $project->id }} btn btn-primary btn-xs btn-dl"><i class="fa fa-download"></i> Download <span class="badge downloads">{{ $project->clicks }}</span></a>
						@else
						<button class="btn btn-primary btn-xs btn-dl" disabled><i class="fa fa-download"></i> Download <span class="badge downloads">{{ $project->clicks }}</button>
						@endif
					</p>
				</div>
				@endforeach
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
							<li><a href="#" class="sort-downloads"><i class="fa fa-download fa-fw"></i> Clicks</a></li>
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
			
			$('[class^=count]').mousedown(function(e){
				e.preventDefault();
				if(e.which == 1 || e.which == 2) {
					console.log('/projects/'+this.classList[0].slice(6)+'/click');
					$.get('/projects/'+this.classList[0].slice(6)+'/click', function(){
						if(e.which == 1)
							window.location.href = $(this).attr('href');
					});
				}
			});
		});
	</script>
@stop