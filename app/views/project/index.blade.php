@extends('layouts.master')

@section('navbar')
	<li><a data-scroll href="#featured">{{ trans('projects.featured') }}</a></li>
	<li><a data-scroll href="#mostclicked">{{ trans('projects.mostclicked') }}</a></li>
	<li><a data-scroll href="#all">{{ trans('projects.all') }}</a></li>
@stop

@section('content')
	<div class="section-one">
		<div class="container">
			<h1>{{ trans('master.title') }}</h1>
		</div>
	</div>
	@include('project.partials.row', array('projects' => $featured, 'title' => 'featured', 'alternating' => false))
	@include('project.partials.row', array('projects' => $mostclicked, 'title' => 'mostclicked', 'alternating' => true))
	<div class="section-two">
		<a class="anchor" id="all"></a>
		<div class="container" id="project-list">
			<h2><i class="fa fa-folder-open"></i> {{ trans('projects.allapps') }}</h2>
			<h4 class="bottom">{{ trans('projects.count',array('count' => '<span class="p-count"></span>', 'total' => '<span class="p-total"></span>')) }}</h4>
			@include('project.partials.controls')
			</form>
			<br />
			@include('project.partials.list', array('projects' => $projects))
		</div>
	</div>
@stop

@section('scripts')
	<script>
		@include('project.js.projectlist')
	
		$(document).ready(function(){
			smoothScroll.init();
			setupProjectList();
		});
	</script>
@stop