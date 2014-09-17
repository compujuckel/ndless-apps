@extends('layouts.master')

@section('content')
	<div class="section-one">
		<div class="container">
			<h1>{{ trans('master.stats') }}</h1>
		</div>
	</div>
	<div class="section-two">
		<div class="container">
			<h2>{{ trans('stats.title', array('pcount' => "<strong>$projects</strong>", 'acount' => "<strong>$authors</strong>")) }}
			<h3>{{ trans('stats.title2', array('count' => "<strong>$clicks</strong>")) }}</h3>
		</div>
	</div>
	<div class="section-one">
		<div class="container">
			<h2>{{ trans('stats.support', array('percent' => "<strong>".round($cx/$projects*100)."%</strong>")) }}</h2>
			<h3 class="bottom">{{ trans('stats.support2', array('percent' => "<strong>".round($classic/$projects*100)."%</strong>")) }}</h3>
			<div class="row">
				<div class="col-md-3 col-md-offset-2">
					<h4>{{ trans('stats.cxsupport') }}</h4>
					<div>
						<canvas id="compChartCX" width="100%" height="100%"></canvas>
					</div>
				</div>
				<div class="col-md-3 col-md-offset-2">
					<h4>{{ trans('stats.clsupport') }}</h4>
					<div>
						<canvas id="compChartCl" width="100%" height="100%"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-two">
		<div class="container">
			<h2 class="bottom">{{ trans('stats.ndless', array('percent' => "<strong>".round(max($comp[0]->count,$comp[1]->count)/$projects*100)."%</strong>")) }}</h2>
			<div class="row">
				<div class="col-md-12">
					<div>
						<canvas id="versChart" width="100%" height="30%"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-one">
		<div class="container">
			<h2>{{ trans('stats.contributions', array('name' => "<strong>".$author[0]->name."</strong>", 'count' => "<strong>".$author[0]->count."</strong>")) }}</h2>
			<h3 class="bottom">{{ trans('stats.contributions2') }}</h3>
			<div class="row">
				<div class="col-md-12">
					<div>
						<canvas id="authChart" width="100%" height="30%"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop

@section('scripts')
	<script src="/js/Chart.min.js"></script>
	<script>
		$(document).ready(function(){
			Chart.defaults.global.responsive = true;
			var compDataCX = [
				{
					value: {{ $cx }},
					color: "#46BFBD",
					highlight: "#5AD3D1",
					label: "{{ trans('stats.cxsupport') }}"
				},
				{
					value: {{ $projects - $cx }},
					color: "#F7464A",
					highlight: "#FF5A5E",
					label: "{{ trans('stats.nocxsupport') }}"
				},
			];
			var compChartCX = new Chart($("#compChartCX").get(0).getContext("2d")).Doughnut(compDataCX);
			
			var compDataCl = [
				{
					value: {{ $classic }},
					color: "#46BFBD",
					highlight: "#5AD3D1",
					label: "{{ trans('stats.clsupport') }}"
				},
				{
					value: {{ $projects - $classic }},
					color: "#F7464A",
					highlight: "#FF5A5E",
					label: "{{ trans('stats.noclsupport') }}"
				},
			];
			var compChartCl = new Chart($("#compChartCl").get(0).getContext("2d")).Doughnut(compDataCl);
			
			var versData = {
				labels: [
					@foreach($comp as $i)
						"{{ $i->version }}",
					@endforeach
				],
				datasets: [{
					label: "compatibility",
					fillColor: "rgba(151,187,205,0.5)",
					strokeColor: "rgba(151,187,205,0.8)",
					highlightFill: "rgba(151,187,205,0.75)",
					highlightStroke: "rgba(151,187,205,1)",
					data: [
						@foreach($comp as $i)
							{{ $i->count }},
						@endforeach
					]
				}]
			};
			var versChar = new Chart($("#versChart").get(0).getContext("2d")).Bar(versData,{scaleShowGridLines: false});
			
			var authData = {
				labels: [
					@foreach($author as $i)
						"{{ $i->name }}",
					@endforeach
				],
				datasets: [{
					label: "contributions",
					fillColor: "rgba(151,187,205,0.5)",
					strokeColor: "rgba(151,187,205,0.8)",
					highlightFill: "rgba(151,187,205,0.75)",
					highlightStroke: "rgba(151,187,205,1)",
					data: [
						@foreach($author as $i)
							{{ $i->count }},
						@endforeach
					]
				}]
			};
			var authChar = new Chart($("#authChart").get(0).getContext("2d")).Bar(authData,{scaleShowGridLines: false});
		});
	</script>
@stop