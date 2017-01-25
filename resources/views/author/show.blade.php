@extends('layouts.master')

@section('content')
	<div class="container">
		<h1>
			{{{ $author->name }}}
			@if(Auth::check() && Auth::user()->editor)
			<a href="/authors/{{ $author->id }}/edit" class="btn btn-default btn-sm"><i class="fa fa-edit"></i> {{ trans('master.edit') }}</a>
			@endif
		</h1>
		<p>
			{{ Lang::choice('authors.contributed', $author->count, array('count' => $author->count)) }}
		</p>
		@include('project.partials.list', array('projects' => $projects))
	</div>
@stop

@section('scripts')
	<script>
		$(document).ready(function(){
			ClickCounter.init();
		});
	</script>
@stop