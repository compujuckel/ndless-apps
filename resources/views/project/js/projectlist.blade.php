function projectFilter(item)
{
	var listItem = $('.id-'+item.values().id);

	if($('label.filter-classic').hasClass('active') && !$('.classic', listItem).hasClass('label-success'))
		return false;
	if($('label.filter-cx').hasClass('active') && !$('.cx', listItem).hasClass('label-success'))
		return false;
	
	@foreach(Ndless::current() as $version)
	if($('label.filter-{{{ $version->filter }}}').hasClass('active') && !$('.label:contains({{{ $version->version }}})', listItem).length)
		return false;
	@endforeach

	return true;
}

function setupProjectList()
{
	var options = {
		valueNames: [ 'name', 'description', 'id', 'downloads', 'timestamp' ]
	};

	var projectList = new List('project-list', options);
	projectList.filter(projectFilter);

	$('.p-total, .p-count').text(projectList.size());

	projectList.on('updated', function(){
		$('.p-count').text(projectList.matchingItems.length);
	});

	$('.sort-name').click(function(e){
		e.preventDefault();
		projectList.sort('name');
		projectList.update();
	});

	$('.sort-downloads').click(function(e){
		e.preventDefault();
		projectList.sort('downloads',{
			order: "desc"
		});
		projectList.update();
	});

	$('.sort-timestamp').click(function(e){
		e.preventDefault();
		projectList.sort('timestamp',{
			order: "desc"
		})
		projectList.update();
	});
	
	@foreach(Ndless::current() as $version)
	$('a.filter-{{{ $version->filter }}}').click(function(){
		$('label.filter-{{{ $version->filter }}}').click();
	});
	@endforeach

	$('label.filter-classic, label.filter-cx'
	@foreach(Ndless::current() as $version)
	+ ',label.filter-{{{ $version->filter }}}'
	@endforeach
	).click(function(){
		setTimeout(function(){
			projectList.filter();
			projectList.filter(projectFilter);
			projectList.update();
		},1);
	});

	$('[class^=count]').mousedown(function(e){
		e.preventDefault();
		var dest = $(this).attr('href');
		if(e.which == 1 || e.which == 2) {
			$.get('/projects/'+this.classList[0].slice(6)+'/click', function(){
				if(e.which == 1)
					window.location.href = dest;
			});
		}
	});
}
