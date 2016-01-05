<ul class="list-group list">
	@foreach($authors as $author)
	<li class="list-group-item">
		<h4><a href="/authors/{{ $author->id }}" class="name">{{{ $author->name }}}</a></h4>
		<p>
			{!! Lang::choice('authors.contributed', $author->count, array('count' => "<span class=\"contributions\">{$author->count}</span>")) !!}
			@if(Auth::check() && Auth::user()->editor)
			<span class="pull-right">
				<a href="/authors/{{ $author->id }}/edit" class="btn btn-default btn-xs"><i class="fa fa-edit"></i> {{ trans('master.edit') }}</a>
			</span>
			@endif
		</p>
	</li>
	@endforeach
</ul>