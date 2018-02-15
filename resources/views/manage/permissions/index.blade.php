@extends('layouts.manage')

@section('content')
<div class="flex-container">
		<header class="row">
			<h1 class="title m-l-30">Manage Permissions</h1>			
		</header>
		<div class="pull-right">
			<a href="{{route('permissions.create')}}" class="btn btn-md btn-primary"><i class="fa fa-user-plus m-r-10"></i> Create New Permission</a>
		</div>
		<hr class="m-t-0">

		<div class="thumbnail-content">
		<table class="table">
		<thead>
			<tr>
					<th>Name</th>					
					<th>Slug</th>
					<th>Description</th>
					<th></th>
			</tr>
			</thead>

			<tbody>
				@foreach ($permissions as $permission)
				<tr>
					<th>{{$permission->display_name}}</th>
					<td>{{$permission->name}}</td>
					<td>{{$permission->description}}</td>
					<td><a class="btn btn-success btn-sm" href="{{route('permissions.show', $permission->id)}}">View</a>  <a class="btn btn-secondary btn-sm" href="{{route('permissions.edit', $permission->id)}}">Edit</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>		
		</div>
	</div> <!-- End of thumbnail -->

	<div class="text-center">
	{{$permissions->links()}}	
	</div>

</div>
@stop