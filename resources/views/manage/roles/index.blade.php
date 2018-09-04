@extends('layouts.manage')

@section('content')
<div class="row m-t-50">
		<div class="col-md-10 col-md-offset-2 col-sm-4">
		<h1 class="title m-l-30">Manage Roles</h1>
		</div>
		<div class="col-md-2 col-sm-4">
		<a href="{{route('roles.create')}}" class="btn btn-primary pull-right m-t-10 m-r-75"><i class="fa fa-user-plus m-r-10"></i> Create New Role</a>
		</div>
		
	

	@foreach ($roles as $role)
	<div class="card">
		<div class="card-body role-content">
			<h3 class="card-title">{{$role->display_name}}</h3>
			<h4 class="card-subtitle text-muted">{{$role->name}}</h4>
			<p>{{$role->description}}</p>
			<a href="{{route('roles.show', $role->id)}}" class="btn btn-success btn-md m-t-20">Details</a><a href="{{route('roles.edit', $role->id)}}" class="btn btn-light btn-md pull-right m-t-20">Edit</a>
		</div>
	</div>		
	@endforeach
</div>
@endsection