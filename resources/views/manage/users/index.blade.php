@extends('layouts.manage')

@section('content')	
<div class="row m-t-50">
	<div class="col-md-10 col-md-offset-2 col-sm-6">
		<h1 class="title m-l-30">Manage Users</h1>
	</div>
	<div class="col-md-2 col-sm-6">
		<a href="{{route('users.create')}}" class="btn btn-md btn-primary pull-right m-r-40"><i class="fa fa-user-plus m-r-10"></i> Create New User</a>
	</div>
		<table class="table">
		<thead>
		<tr>
		<th>id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Date Created</th>
		<th></th>
		</tr>
		</thead>

		<tbody>
		@foreach ($users as $user)
		<tr>
		<th>{{$user->id}}</th>
		<td>{{$user->name}}</td>
		<td>{{$user->email}}</td>
		<td>{{$user->created_at->toFormattedDateString()}}</td>
		<td class="pull-right m-r-5"><a class="btn btn-primary btn-sm m-r-5" href="{{route('users.show', $user->id)}}">View</a> <a class="btn btn-light btn-sm m-r-40" href="{{route('users.edit', $user->id)}}">Edit</a></td>
		</tr>
		@endforeach
		</tbody>
		</table>
		</div>		

		
		<div class="text-center">
		{{$users->links()}}	
		</div>
	</div>
</div>
@stop