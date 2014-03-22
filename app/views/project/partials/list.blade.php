<ul class="list-group list">
	@foreach($projects as $project)
	<li class="list-group-item">
		<span class="hidden classic">{{ $project->classic }}</span>
		<span class="hidden cx">{{ $project->cx }}</span>
		<span class="pull-right">
			@foreach($project->versions as $version)
			@if(in_array($version->version,array('3.1','3.6')))
			<span class="label label-success">{{{ $version->version }}}</span>
			@else
			<span class="label label-warning">{{{ $version->version }}}</span>
			@endif
			@endforeach
			{{ $project->classic_formatted }}
			{{ $project->cx_formatted }}
		</span>
		<h4><a href="{{{ $project->website }}}" class="name">{{{ $project->name }}}</a></h4>
		<p>
			<small>
				@foreach($project->authors as $author)
				<span class="label label-default">{{{ $author->name }}}</span>
				@endforeach
			</small>
		</p>
		<p>
			<span class="description">
				{{{ $project->description }}}
			</span>
			<span class="pull-right">
				@if($project->download_link)
				<a href="{{ $project->download_link }}" class="btn btn-primary btn-xs btn-dl"><i class="fa fa-download"></i> Download <span class="badge downloads">{{ $project->clicks }}</span></a>
				@else
				<button class="btn btn-primary btn-xs btn-dl" disabled><i class="fa fa-download"></i> Download <span class="badge downloads">{{ $project->clicks }}</button>
				@endif
			</span>
		</p>
	@endforeach
</ul>