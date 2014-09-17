function projectFilter(item)
{
	var listItem = $('.id-'+item.values().id);
	
	if($('label.filter-classic').hasClass('active') && !$('.classic', listItem).hasClass('label-success'))
		return false;
	if($('label.filter-cx').hasClass('active') && !$('.cx', listItem).hasClass('label-success'))
		return false;
	
	if($('label.filter-31').hasClass('active') && !$('.label:contains(3.1)', listItem).length)
		return false;
	if($('label.filter-36').hasClass('active') && !$('.label:contains(3.6)', listItem).length)
		return false;
	return true;
}

function setupProjectList()
{
	var options = {
		valueNames: [ 'name', 'description', 'id', 'downloads' ]
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
	
	$('label.filter-classic, label.filter-cx, label.filter-31, label.filter-36').click(function(){
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