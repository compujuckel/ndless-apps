<ul class="list-group list">
	@foreach($authors as $author)
	<li class="list-group-item">
		<h4><a href="/authors/{{ $author->id }}" class="name">{{{ $author->name }}}</a></h4>
		<p>
			Contributed to <span class="contributions">{{ $author->count }}</span> {{ $author->count == 1 ? 'project' : 'projects' }}
		</p>
	</li>
	@endforeach
</ul>