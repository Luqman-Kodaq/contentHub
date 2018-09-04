@extends('layouts.manage')

@section('content')
<div class="row m-t-50">
		<div class="col-md-7 col-sm-7">
		<h1 class="title m-l-30">Manage Admins</h1>
		</div>
		<div class="col-md-5 col-sm-5">
		<a href="{{route('admins.create')}}" class="btn btn-primary m-t-10 admin-create"><i class="fa fa-user-plus m-r-10"></i> Create New Admin</a>
		</div>
		
	

	@foreach ($admins as $admin)
	<div class="card admin-card">
		<div class="card-body admin-content">
			<h3 class="card-title">{{$admin->name}}</h3>
			<h4 class="card-subtitle text-muted">{{$admin->email}}</h4>
			<a href="{{route('admins.show', $admin->id)}}" class="btn btn-success btn-md m-t-20" style="width: 8rem;"">Details</a><a href="{{route('admins.edit', $admin->id)}}" class="btn btn-light btn-md m-t-20" style="width: 8rem;">Edit</a>
		</div>
	</div>		
	@endforeach
</div>
@endsection