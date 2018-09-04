	<!-- Side menu -->
		<aside id="admin-side-menu" class="row main-sidebar">
		<section class="sidebar display-table-cell valign-top">			
			<ul class="side-items m-t-10">
			<li class="{{Nav::isRoute('manage.dashboard')}}">
				<a href="{{route('manage.dashboard')}}"><span class="fa fa-th" aria-hidden="true"></span>Dashboard</a>
			</li>
			<li class="link">
				<a href="#collapse-pages" data-toggle="collapse" aria-controls="collapse-pages"><span class="fa fa-file-text" aria-hidden="true"></span>
				<span class="hidden-sm hidden-xs">Pages</span>
				</a>				
				<ul class="collapse collapseable" id="collapse-pages">
					<a href="#">Products</a>
					<a href="#">Contact</a>
					<a href="#">About Us</a>
				</ul>
			</li>
			<li class="{{Nav::hasSegment(['posts', 'categories', 'tags'], 2)}}">
				<a href="#collapse-blog" data-toggle="collapse" aria-controls="collapse-blog"><span class="fa fa-pencil" aria-hidden="true"></span>
				<span class="hidden-sm hidden-xs">Blog Posts</span>
				</a>
				<ul class="collapse collapseable" id="collapse-blog">
					<a href="{{route('posts.index')}}">Posts</a>
					<a href="{{route('categories.index')}}">Categories</a>
					<a href="#">Tags</a>
				</ul>
			</li>
			<li class="{{Nav::isResource('admins')}}">
				<a href="#collapse-admins" data-toggle="collapse" aria-controls="collapse-admins"><span class="fa fa-user" aria-hidden="true"></span>
				<span class="hidden-sm hidden-xs">Admins</span>
				</a>
				<ul class="collapse collapseable" id="collapse-admins">
					<a href="{{route('admins.index')}}">All Admins</a>
				</ul>
			</li>
			<li class="{{Nav::isResource('users')}}">
				<a href="#collapse-users" data-toggle="collapse" aria-controls="collapse-users"><span class="fa fa-user" aria-hidden="true"></span>
				<span class="hidden-sm hidden-xs">Users</span>
				</a>
				<ul class="collapse collapseable" id="collapse-users">
					<a href="{{route('users.index')}}">All Users</a>
				</ul>
			</li>
			<li class="submenu {{Nav::hasSegment(['roles', 'permissions'], 2)}}">
				<a href="#collapse-roles" data-toggle="collapse" aria-controls="collapse-roles" class="">Roles &amp; Permissions</a>	
				<ul class="menu collapse collapseable" id="collapse-roles">
					<a href="{{route('roles.index')}}" class="{{Nav::isResource('roles')}}">Roles</a>
					<a href="{{route('permissions.index')}}" class="{{Nav::isResource('permissions')}}">Permissions</a>
				</ul>
			</li>
			<li class="link">
				<a href="#collapse-mail" data-toggle="collapse" aria-controls="collapse-mail"><span class="fa fa-envelope" aria-hidden="true"></span>
				<span class="hidden-sm hidden-xs">Mailbox</span>
				</a>
				<ul class="collapse collapseable" id="collapse-mail">
					<a href="#">Inbox</a>
					<a href="#">Compose mail</a>
					<a href="#">Edit</a>
				</ul>
			</li>			
			<li class="link">
				<a href=""><span class="fa fa-cog" aria-hidden="true"></span>
				<span class="hidden-sm hidden-xs">System</span>
				</a>
			</li>			
			</ul>
		</section>
		</aside>