var ProjectList = (function () {
    "use strict";

    var listOptions = {
        valueNames: [ 'name', 'description', 'id', 'downloads', 'timestamp' ]
    };

    var list;
    var currentNdlessVersions;

    function filterClassicChecked() {
        return $('label.filter-classic').hasClass('active');
    }

    function filterCxChecked() {
        return $('label.filter-cx').hasClass('active');
    }

    function showDeprecatedChecked() {
        return $('label.show-deprecated').hasClass('active');
    }

    function ndlessVersionsChecked() {
        var ret = {};

        currentNdlessVersions.forEach(function (elem) {
            ret['filter-' + elem.filter] = $('label.filter-' + elem.filter).hasClass('active');
        });

        return ret;
    }

    function updateDeprecatedLabels() {
        if(showDeprecatedChecked()) {
            $('.label-ndless-deprecated').show();
        } else {
            $('.label-ndless-deprecated').hide();
        }
    }

    function sortEventHandler(field, order, event) {
        event.preventDefault();
        list.sort(field,{
            order: order
        });
        list.update();
    }

    function projectListFilter() {
        var options = {
            classic: filterClassicChecked(),
            cx: filterCxChecked(),
            deprecated: showDeprecatedChecked(),
            versions: ndlessVersionsChecked()
        };

        return function (item) {
            var listItem = $('.id-'+item.values().id);

            if(!options.deprecated && $(listItem).hasClass('project-deprecated'))
                return false;
            if(options.classic && !$('.classic', listItem).hasClass('label-success'))
                return false;
            if(options.cx && !$('.cx', listItem).hasClass('label-success'))
                return false;

            var v;
            for (v in options.versions) {
                if(options.versions[v] && !$('.' + v, listItem).length)
                    return false;
            }

            return true;
        };
    }

    function filterProjectList() {
        list.filter();
        list.filter(projectListFilter());
        list.update();
        updateDeprecatedLabels();
    }

    function initProjectList() {
        list = new List('project-list', listOptions);
    }

    function initEventHandlers() {
        $('.sort-name').click($.proxy(sortEventHandler, null, 'name', 'asc'));
        $('.sort-downloads').click($.proxy(sortEventHandler, null, 'downloads', 'desc'));
        $('.sort-timestamp').click($.proxy(sortEventHandler, null, 'timestamp', 'desc'));

        currentNdlessVersions.forEach(function (elem) {
            $('a.filter-' + elem.filter).click(function () {
                $('label.filter-' + elem.filter).click();
            });
        });

        $('label.filter-classic, label.filter-cx, label.show-deprecated'
            + currentNdlessVersions.reduce(function (prev, cur) { return prev + ', label.filter-' + cur.filter; }, '')
        ).click(function(){
            setTimeout(filterProjectList, 1);
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

    function init() {
        initProjectList();

        // Get current Ndless versions from hidden input field
        currentNdlessVersions = JSON.parse($('#current-ndless-versions').val());

        $('.p-count, .p-total').text(list.size());

        // Update matching count after filtering
        list.on('updated', function(){
            $('.p-count').text(list.matchingItems.length);
        });

        filterProjectList();

        // Deprecated Ndless versions hidden by default
        $('.label-ndless-deprecated').hide();

        initEventHandlers();
    }

    return {
      init: init
    };
})();
/*
function setupProjectList()
{
    var options = {
        valueNames: [ 'name', 'description', 'id', 'downloads', 'timestamp' ]
    };

    var projectList = new List('project-list', options);
    var currentNdlessVersions = JSON.parse($('#current-ndless-versions').val());

    function filterProjectList() {
        var options = {
            classic: $('label.filter-classic').hasClass('active'),
            cx: $('label.filter-cx').hasClass('active'),
            deprecated: $('label.show-deprecated').hasClass('active'),
            versions: {}
        };

        currentNdlessVersions.forEach(function (elem) {
           options.versions['filter-' + elem.filter] = $('label.filter-' + elem.filter).hasClass('active');
        });

        var f = function (item) {
            var listItem = $('.id-'+item.values().id);

            if(!this.options.deprecated && $(listItem).hasClass('project-deprecated'))
                return false;
            if(this.options.classic && !$('.classic', listItem).hasClass('label-success'))
                return false;
            if(this.options.cx && !$('.cx', listItem).hasClass('label-success'))
                return false;

            for (v in this.options.versions) {
                if(this.options.versions[v] && !$('.' + v, listItem).length)
                    return false;
            }

            return true;
        }.bind({options: options});

        projectList.filter(f);
    }

    function filterAndUpdate() {
        projectList.filter();
        filterProjectList();
        projectList.update();
    }

	$('.p-total, .p-count').text(projectList.size());

	projectList.on('updated', function(){
		$('.p-count').text(projectList.matchingItems.length);
	});

    filterAndUpdate();

	$('.label-ndless-deprecated').hide();

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

	$('label.show-deprecated').click(function(){
		$('.label-ndless-deprecated').toggle();
	});

    currentNdlessVersions.forEach(function (elem) {
        $('a.filter-' + elem.filter).click(function () {
            $('label.filter-' + elem.filter).click();
        });
    });

	$('label.filter-classic, label.filter-cx, label.show-deprecated'
    + currentNdlessVersions.reduce(function (prev, cur) { return prev + ', label.filter-' + cur.filter, ''; })
	).click(function(){
		setTimeout(filterAndUpdate, 1);
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
}*/
//# sourceMappingURL=projectlist.js.map
