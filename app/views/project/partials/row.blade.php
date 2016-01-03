<div class="section-{{ $alternating ? 'one' : 'two' }}">
	<a class="anchor" id="{{ $title }}"></a>
	<div class="container">
		<h2><i class="fa fa-thumb-tack"></i> {{ trans('projects.' . $title) }}</h2>
		<div class="row">
			@foreach($projects as $project)
			<div class="col-md-4 text-center">
				@if(!file_exists(public_path() . "/img/screenshot/{$project->id}.png"))
				<img data-src="holder.js/320x240/{{ $alternating ? '#fff:#eee' : '#eee:#fff' }}/text:{{ trans('projects.nopic') }}" class="img-responsive" alt="{{{ $project->name }}}">
				@else
				<img src="/img/screenshot/{{ $project->id }}.png" width="320" height="240" class="img-responsive" alt="{{{ $project->name }}}">
				@endif
				<h3><a href="{{{ $project->website }}}" class="count-{{ $project->id }} name">{{{ $project->name }}}</a></h3>
				<p>
					<small>
						@foreach($project->authors as $author)
						<a href="/authors/{{ $author->id }}" class="label label-default">{{{ $author->name }}}</a>
						@endforeach
					</small>
				</p>
				<p>
					{{{ $project->description }}}
				</p>
				<p>
					@foreach($project->categories as $category)
					<a href="/categories/{{ $category->id }}" class="label label-info"><i class="fa {{ $category->name }}"></i> {{ Lang::choice("categories.{$category->id}",1) }}</a>
					@endforeach
					@foreach($project->versions as $version)
					@if($version->id == Ndless::latest()->id)
					<span class="label label-success">{{{ $version->version }}}</span>
					@else
					<span class="label label-default">{{{ $version->version }}}</span>
					@endif
					@endforeach
					{{ $project->classic_formatted }}
					{{ $project->cx_formatted }}
				</p>
				<p>
					@if(Auth::check() && Auth::user()->editor)
					<a href="/projects/{{ $project->id }}/edit" class="btn btn-default btn-xs"><i class="fa fa-edit"></i> {{ trans('master.edit') }}</a>
					@endif
					@if($project->download_link)
					<a href="{{{ $project->download_link }}}" class="count-{{ $project->id }} btn btn-primary btn-xs btn-dl"><i class="fa fa-download"></i> {{ trans('projects.download') }} <span class="badge downloads">{{ $project->clicks }}</span></a>
					@else
					<button class="btn btn-primary btn-xs btn-dl" disabled><i class="fa fa-download"></i> {{ trans('projects.download') }} <span class="badge downloads">{{ $project->clicks }}</button>
					@endif
				</p>
			</div>
			@endforeach
		</div>
	</div>
</div>