@extends('layouts.master')

@section('content')
	<div class="container">
		<h1>{{ Lang::choice("categories.{$category->id}",2) }}</h1>
		<p>
			{{ trans('categories.incategory', array('count' => $category->count)) }}
		</p>
		@include('project.partials.list', array('projects' => $projects))
	</div>
@stop