@extends('layouts.master')

@section('content')
	<div class="container">
		<h1>
			{{{ $author->name }}}
			@if(Auth::check() && Auth::user()->editor)
			<a href="/authors/{{ $author->id }}/edit" class="btn btn-default btn-sm"><i class="fa fa-edit"></i> Edit</a>
			@endif
		</h1>
		<p>
			Contributed to {{ $author->count }} {{ $author->count == 1 ? 'project' : 'projects' }}
		</p>
		@include('project.partials.list', array('projects', $projects))
	</div>
@stop

@section('scripts')
	<script>
		$(document).ready(function(){
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