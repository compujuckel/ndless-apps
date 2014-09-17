@extends('layouts.master')

@section('content')
	<div class="section-one">
		<div class="container">
			<h1>{{ trans('master.authors') }}</h1>
		</div>
	</div>
	<div class="section-two">
		<div class="container" id="author-list">
			<h2 class="bottom"><i class="fa fa-user"></i> {{ trans('authors.allauthors') }}</h2>
			<form class="form-inline" role="form">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-search"></i></span>
						<input type="text" class="form-control search" placeholder="{{ trans('master.search') }}"></input>
					</div>
				</div>
				<div class="form-group">
					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-sort"></i> {{ trans('master.sort') }} <span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#" class="sort-name"><i class="fa fa-sort-alpha-asc fa-fw"></i> {{ trans('master.name') }}</a></li>
							<li><a href="#" class="sort-contributions"><i class="fa fa-code fa-fw"></i> {{ trans('authors.contributions') }}</a></li>
						</ul>
					</div>
					@if(Auth::check() && Auth::user()->editor)
					<a href="/authors/create" class="btn btn-success"><i class="fa fa-plus"></i> {{ trans('master.add') }}</a>
					@endif
				</div>
			</form>
			<br />
			@include('author.partials.list', array('authors' => $authors))
		</div>
	</div>
@stop

@section('scripts')
	<script>
		$(document).ready(function(){
			var options = {
				valueNames: ['name', 'contributions']
			};
			
			var authorList = new List('author-list', options);
			
			$('.sort-name').click(function(e){
				e.preventDefault();
				authorList.sort('name');
				authorList.update();
			});
			
			$('.sort-contributions').click(function(e){
				e.preventDefault();
				authorList.sort('contributions', { order: 'desc' });
				authorList.update();
			});
		});
	</script>
@stop