<ul class="list-group list">
	@foreach($projects as $project)
	<li class="list-group-item id-{{ $project->id }} {{ $project->deprecated ? 'project-deprecated' : '' }}">
		<span class="hidden id">{{ $project->id }}</span>
		<span class="hidden timestamp">{{ $project->created_at->timestamp }}</span>
		<span class="pull-right">
			@foreach($project->categories as $category)
			<a href="/categories/{{ $category->id }}" class="label label-info"><i class="fa {{ $category->name }}"></i> {{ Lang::choice("categories.{$category->id}",1) }}</a>
			@endforeach
			@foreach($project->versions as $version)
			@if(!$version->deprecated)
			<a class="label label-success filter-{{{ $version->filter }}}">{{{ $version->version }}}</a>
			@else
			<span class="label label-default label-ndless-deprecated filter-{{{ $version->filter }}}">{{{ $version->version }}}</span>
			@endif
			@endforeach
			{!! $project->classic_formatted !!}
			{!! $project->cx_formatted !!}
		</span>
		<h4><a href="{{{ $project->website }}}" class="count-{{ $project->id }} name">{{{ $project->name }}}</a></h4>
		<p>
			<small>
				@foreach($project->authors as $author)
				<a href="/authors/{{ $author->id }}" class="label label-default">{{{ $author->name }}}</a>
				@endforeach
			</small>
		</p>
		<p>
			<span class="description">
				{{{ $project->description }}}
			</span>
			<span class="pull-right">
				@if(Auth::check() && Auth::user()->editor)
				<a href="/projects/{{ $project->id }}/edit" class="btn btn-default btn-xs"><i class="fa fa-edit"></i> {{ trans('master.edit') }}</a>
				@endif
				@if($project->download_link)
				<a href="{{{ $project->download_link }}}" class="count-{{ $project->id }} btn btn-primary btn-xs btn-dl"><i class="fa fa-download"></i> {{ trans('projects.download') }} <span class="badge downloads">{{ $project->clicks }}</span></a>
				@else
				<button class="btn btn-primary btn-xs btn-dl" disabled><i class="fa fa-download"></i> {{ trans('projects.download') }} <span class="badge downloads">{{ $project->clicks }}</button>
				@endif
			</span>
		</p>
	@endforeach
</ul>
