@extends('layouts.master')

@section('content')
	<div class="container">
		<h1>{{{ $author->name }}} <a href="/authors/{{ $author->id }}/edit" class="btn btn-default btn-sm"><i class="fa fa-edit"></i> Edit</a></h1>
		<p>
			Contributed to {{ $author->count }} {{ $author->count == 1 ? 'project' : 'projects' }}
		</p>
		@include('project.partials.list', array('projects', $projects))
	</div>
@stop