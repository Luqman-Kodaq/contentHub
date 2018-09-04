<div class="search_header">
<header id="nav-header" class="row">
	<div class="col-md-5 pull-left">
		<input type="text" name="search" class="hidden-sm hidden-xs p-t-5"" id="search" placeholder="Search for something...">
	</div>

	<div class="col-md-7">
		<ul class="pull-right">
			<li class="welcome hidden-xs">Welcome {{Auth::user()->name}}</li>
			<li>
				<a href="#">
					<span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
					<span class="label label-warning=">2</span>
				</a>
			</li>

			<li>
				<a href="#">
					<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					<span class="label label-message=">3</span>
				</a>
			</li>
		</ul>
	</div>
</header>
</div>