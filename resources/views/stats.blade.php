@extends('layouts.master')

@section('content')
	<div class="section">
		<div class="container">
			<h1>{{ trans('master.stats') }}</h1>
		</div>
	</div>
	<div class="section">
		<div class="container">
			<h2>{!! trans('stats.title', array('pcount' => "<strong>".$data['countProjects']."</strong>", 'acount' => "<strong>".$data['countAuthors']."</strong>")) !!}</h2>
			<h3>{!! trans('stats.title2', array('count' => "<strong>".number_format($data['countClicks'], 0, trans('master.dec_point'), trans('master.thousands_sep'))."</strong>")) !!}</h3>
		</div>
	</div>
	<div class="section">
		<div class="container">
			<h2>{!! trans('stats.support', array('percent' => "<strong>".round($data['countCx']/$data['countProjects']*100)."%</strong>")) !!}</h2>
			<h3 class="bottom">{!! trans('stats.support2', array('percent' => "<strong>".round($data['countClassic']/$data['countProjects']*100)."%</strong>")) !!}</h3>
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
	<div class="section">
		<div class="container">
			<h2 class="bottom">{!! trans('stats.ndless', array('percent' => "<strong>".round($data['comp'][0]->count/$data['countProjects']*100)."%</strong>", 'version' => Ndless::latest()->version)) !!}</h2>
			<div class="row">
				<div class="col-md-12">
					<div>
						<canvas id="versChart" width="100%" height="30%"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="container">
			<h2>{!! trans('stats.contributions', array('name' => "<strong>".$data['author'][0]->name."</strong>", 'count' => "<strong>".$data['author'][0]->count."</strong>")) !!}</h2>
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

@section('data')
    <script type="application/json" id="stats-data">
        {!! json_encode($data) !!}
    </script>
    <script type="application/json" id="lang-data">
        {!! json_encode(array(
            'cxsupport' => trans('stats.cxsupport'),
            'nocxsupport' => trans('stats.nocxsupport'),
            'clsupport' => trans('stats.clsupport'),
            'noclsupport' => trans('stats.noclsupport')
        )) !!}
    </script>
@stop

@section('scripts')
	<script>
		$(document).ready(function(){
            Stats.init();
		});
	</script>
@stop