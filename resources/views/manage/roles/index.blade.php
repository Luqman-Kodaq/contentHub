@extends('layouts.manage')

@section('content')
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-11 col-lg-offset-4">
<div class="flex-container m-t-10">
	<div class="row">
		<div class="col-md-4">
		<h1 class="title m-l-30">Manage Roles</h1>
		</div>
		<div class="col-md-4 pull-right">
		<a href="{{route('roles.create')}}" class="btn btn-md btn-primary pull-right"><i class="fa fa-user-plus m-r-10"></i> Create New Role</a>
		</div>
	</div>	
		
	

	@foreach ($roles as $role)		
	<div class="card role-box">
		<div class="card-body role-content">
			<h3 class="card-title">{{$role->display_name}}</h3>
			<h4 class="card-subtitle text-muted">{{$role->name}}</h4>
			<p>{{$role->description}}</p>
			<a href="{{route('roles.show', $role->id)}}" class="btn btn-success btn-md m-t-20">Details</a><a href="{{route('roles.edit', $role->id)}}" class="btn btn-secondary btn-md pull-right m-t-20">Edit</a>
		</div>
	</div>		
	@endforeach
</div>
</div>
</div>
@endsection