<form class="form-inline" role="form">
	<div class="form-group">
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-search"></i></span>
			<input type="text" class="form-control search" placeholder="{{ trans('master.search') }}"></input>
		</div>
	</div>
	<div class="form-group">
		<div class="btn-group" data-toggle="buttons">
			<label class="btn btn-default filter-classic">
				<input type="checkbox">Classic
			</label>
			<label class="btn btn-default filter-cx">
				<input type="checkbox">CX
			</label>
		</div>
		<div class="btn-group" data-toggle="buttons">
			<label class="btn btn-default filter-{{{ Ndless::latest()->filter }}}">
				<input type="checkbox">{{{ Ndless::latest()->version }}}
			</label>
		</div>
		<div class="btn-group">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				<i class="fa fa-sort"></i> {{ trans('master.sort') }} <span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu">
				<li><a href="#" class="sort-name"><i class="fa fa-sort-alpha-asc fa-fw"></i> {{ trans('master.name') }}</a></li>
				<li><a href="#" class="sort-downloads"><i class="fa fa-download fa-fw"></i> {{ trans('master.clicks') }}</a></li>
			</ul>
		</div>
		@if(Auth::check() && Auth::user()->editor)
		<a href="/projects/create" class="btn btn-success"><i class="fa fa-plus"></i> {{ trans('master.add') }}</a>
		@endif
	</div>
</form>