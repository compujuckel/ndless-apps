@extends('layouts.master')

@section('content')
	<div class="section-one">
		<div class="container">
			<h1>{{ Lang::choice("categories.{$category->id}",2) }}</h1>
		</div>
	</div>
	<div class="section-two">
		<div class="container" id="project-list">
			<h2><i class="fa {{ $category->name }}"></i> {{ trans("categories.all{$category->id}") }}</h2>
			<h4 class="bottom">{!! trans('categories.incategory', array('count' => '<span class="p-count"></span>', 'total' => '<span class="p-total"></span>')) !!}</h4>
			@include('project.partials.controls')
			<br />
			@include('project.partials.list', array('projects' => $projects))
		</div>
	</div>
@stop

@section('scripts')
	<script>
		@include('project.js.projectlist')
	
		$(document).ready(function(){
			setupProjectList();
		});
	</script>
@stop