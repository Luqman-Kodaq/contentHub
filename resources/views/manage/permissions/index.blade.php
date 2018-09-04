@extends('layouts.manage')

@section('content')
<div class="row m-t-50">
	<div class="col-md-10 col-md-offset-2 col-sm-4">
			<h1 class="title m-l-30">Manage Permissions</h1>
	</div>
	<div class="col-md-2 col-sm-4">
			<a href="{{route('permissions.create')}}" class="btn btn-primary pull-right m-t-10 m-r-70"><i class="fa fa-user-plus m-r-10"></i> Create New Permission</a>
	</div>

	<div class="col-md-10 col-md-offset-2 col-sm-4 flex-container">
	<hr class="m-t-0">
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
					<td><a class="btn btn-success btn-sm" href="{{route('permissions.show', $permission->id)}}">View</a>  <a class="btn btn-secondary btn-sm m-l-5" href="{{route('permissions.edit', $permission->id)}}">Edit</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	<div class="text-center">
	{{$permissions->links()}}	
	</div>		
	</div><!-- End of thumbnail -->
</div>
@stop