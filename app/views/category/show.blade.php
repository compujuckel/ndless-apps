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
			<h4 class="bottom">{{ trans('categories.incategory', array('count' => '<span class="p-count"></span>', 'total' => '<span class="p-total"></span>')) }}</h4>
			<form class="form-inline" role="form">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-search"></i></span>
						<input type="text" class="form-control search" placeholder="{{ trans('master.search') }}"></input>
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
					<div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default filter-31">
							<input type="checkbox">3.1
						</label>
						<label class="btn btn-default filter-36">
							<input type="checkbox">3.6
						</label>
					</div>
					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-sort"></i> {{ trans('master.sort') }} <span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#" class="sort-name"><i class="fa fa-sort-alpha-asc fa-fw"></i> {{ trans('master.name') }}</a></li>
							<li><a href="#" class="sort-downloads"><i class="fa fa-download fa-fw"></i> {{ trans('master.clicks') }}</a></li>
						</ul>
					</div>
					@if(Auth::check() && Auth::user()->editor)
					<a href="/projects/create" class="btn btn-success"><i class="fa fa-plus"></i> {{ trans('master.add') }}</a>
					@endif
				</div>
			</form>
			<br />
			@include('project.partials.list', array('projects' => $projects))
		</div>
	</div>
@stop

@section('scripts')
	<script src="/js/projectlist.js"></script>
	<script>
		$(document).ready(function(){
			setupProjectList();
		});
	</script>
@stop