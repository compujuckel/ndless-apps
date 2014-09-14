@extends('layouts.master')

@section('content')
	<div class="section-one">
		<div class="container">
			<h1>Statistics</h1>
		</div>
	</div>
	<div class="section-two">
		<div class="container">
			<h2>Tracking <strong>{{ $projects }}</strong> apps by <strong>{{ $authors }}</strong> authors</h2>
			<h3>In total, they have been clicked <strong>{{ $clicks }}</strong> times.</h3>
		</div>
	</div>
	<div class="section-one">
		<div class="container">
			<h2><strong>{{ round($cx/$projects*100) }}%</strong> of all apps run on TI-Nspire CX models...</h2>
			<h3>... and <strong>{{ round($classic/$projects*100) }}%</strong> run on the old TI-Nspire.</h3>
			<div class="row">
				<div class="col-md-3 col-md-offset-2">
					<h4>TI-Nspire CX support</h4>
					<div>
						<canvas id="compChartCX" width="100%" height="100%"></canvas>
					</div>
				</div>
				<div class="col-md-3 col-md-offset-2">
					<h4>TI-Nspire support</h4>
					<div>
						<canvas id="compChartCl" width="100%" height="100%"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-two">
		<div class="container">
			<h2><strong>{{ round(max($comp[0]->count,$comp[1]->count)/$projects*100) }}%</strong> run on the latest Ndless 3.x</h2>
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
			<h2><strong>{{ $author[0]->name }}</strong> has contributed to <strong>{{ $author[0]->count }}</strong> projects.</h2>
			<h3>These are the authors with the most contributions.</h3>
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
					label: "Support for TI-Nspire CX"
				},
				{
					value: {{ $projects - $cx }},
					color: "#F7464A",
					highlight: "#FF5A5E",
					label: "No support for TI-Nspire CX"
				},
			];
			var compChartCX = new Chart($("#compChartCX").get(0).getContext("2d")).Doughnut(compDataCX);
			
			var compDataCl = [
				{
					value: {{ $classic }},
					color: "#46BFBD",
					highlight: "#5AD3D1",
					label: "Support for TI-Nspire"
				},
				{
					value: {{ $projects - $classic }},
					color: "#F7464A",
					highlight: "#FF5A5E",
					label: "No support for TI-Nspire"
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