@extends('layouts.master')

@section('content')
	<div class="container">
		<h1>{{{ $project->name }}}</h1>
		@include('project.partials.list', array('projects' => array($project)))
	</div>
@stop