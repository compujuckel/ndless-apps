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
			$('[class^=count]').mousedown(function(e){
				e.preventDefault();
				var dest = $(this).attr('href');
				if(e.which == 1 || e.which == 2) {
					console.log('/projects/'+this.classList[0].slice(6)+'/click');
					$.get('/projects/'+this.classList[0].slice(6)+'/click', function(){
						if(e.which == 1)
							window.location.href = dest;
					});
				}
			});
		});
	</script>
@stop